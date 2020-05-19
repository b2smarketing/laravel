<?php

use Carbon\Carbon;

use App\Campanha;
use App\Curso;
use App\Datalist;
use App\Lead;
use App\System\Email;

require_once ('Helpers.php');

use App\System\Event;
use App\System\Process;

$schedule->call(function () {
    Process::init('schedule')->text('Disparo e-mail diário')->run(function () {

        _ ('Gerando relatorio diario...');

        // set_time_limit(600);
        set_time_limit(0);

        // Validação de data (HELPER)

        $min = Carbon::yesterday();
        $max = Carbon::today();

        $exibir = function ($data) use ($min, $max) {
            return (($data >= $min) && ($data < $max));
        };

        // Aqui fazemos o loop por todas campanhas

        foreach (Campanha::cursor() as $campanha) {

            // Valida se campanha está ativa
            if (!$campanha->is_ativa || !$campanha->relatorios)
                continue;

            _ ('Campanha: ' . $campanha->nome);

            // Leads

            $leads = $campanha->leads_total()->with('curso')->get();
            $leads_hoje = $leads->filter(function ($lead) use ($exibir) {
                return $exibir($lead->created_at);
            });

            // Ignorar e-mails em branco
            if ($leads->count() == 0)
                continue;

            // Inscritos

            // $inscritos = $campanha->inscritos_total()->with('curso')->get();
            $inscritos = $campanha->inscritos_total_unique()->with('curso')->get();
            $inscritos_hoje = $inscritos->filter(function ($lead) use ($exibir) {
                return $exibir($lead->created_at);
            });

            // Matriculados

            // $matriculados = $campanha->matriculados()->with('curso')->get();
            $matriculados = $campanha->matriculados_total_unique()->with('curso')->get();
            $matriculados_hoje = $matriculados->filter(function ($lead) use ($exibir) {
                return $exibir($lead->created_at);
            });

            // Cursos

            $cursos = [];

            foreach ($campanha->cursos()->cursor() as $curso) {
                $c = [
                    'curso' => $curso,
                    'leads' => $leads_hoje->where('curso.id', $curso->id)->count(),
                    'inscritos' => $inscritos_hoje->where('curso.id', $curso->id)->count(),
                    'inscritos_total' => $inscritos->where('curso.id', $curso->id)->count(),
                    'matriculados' => $matriculados_hoje->where('curso.id', $curso->id)->count(),
                    'matriculados_total' => $matriculados->where('curso.id', $curso->id)->count()
                ];

                $cursos[] = $c;
            }

            $cursos = collect($cursos)->sortBy('curso.nome');

            // Criar e-mail

            _ ('Processando dados...');

            $assunto = 'Relatório de Campanha: ' . $min->format('d/m/Y') . ' [' . $campanha->nome . ']';

            $mail_body = view('AmbienteConversao::email-diario', [
                'leads' => $leads,
                'leads_hoje' => $leads_hoje,
                'inscritos' => $inscritos,
                'inscritos_hoje' => $inscritos_hoje,
                'matriculados' => $matriculados,
                'matriculados_hoje' => $matriculados_hoje,
                'cursos' => $cursos
            ])->render();

            // Novo código para disparo de e-mail individual

            _ ('Preparando disparos de e-mail...');

            foreach(Datalist::on('email-diario')->cursor() as $dest) {

                _ ('Disparando e-mail: ' . $dest->value);

                // Criar e-mail
                $email = Email::create($assunto)
                    ->smtp_auth()
                    ->from(env('SMTP_USER'), 'App FAM')
                    ->to('everton.messias@gmail.com','Everton')
                    ->to('eryvelton@fam.br','Eryvelton')
                    ->to('gabriela@fam.br','Gabriela')
                    ->html($mail_body);

                // Realizar disparo
                if ($email->send())
                    _ ('Enviado com sucesso!');
                else {
                    _ ('Falha ao enviar e-mail:');
                    _ ($email->error());
                }

                // Deixar o servidor de e-mail "respirar" um pouco
                sleep(6);
            }

            /*// Criar e-mail
            $email = Email::create($assunto)
                ->smtp_auth()
                ->from(env('SMTP_USER'), 'App FAM')
                // ->to('pratta@b2smarketing.com', 'Matt Pratta')
                // ->to('eryvelton@fam.br', 'Eryvelton Baldin')
                ->html($html);

            // Destinatários

            foreach(Datalist::on('email-diario')->cursor() as $dest) {
                $email->to($dest->value);
            }

            _ ('Enviando e-mail...');

            // Enviar
            if ($email->send())
                _ ('Enviado com sucesso!');
            else {
                _ ('Falha ao enviar e-mail:');
                _ ($email->error());
            }
            */
        }

    });

 })->timezone('America/Sao_Paulo')->dailyAt('6:00'); // Rodamos esse relatório todos os dias, às 10:37 da manhã