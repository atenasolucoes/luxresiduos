<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Lux Resíduos',
            'email' => 'luxresiduos@gmail.com',
            'password' => bcrypt('dg458963'),
        ]);
        DB::table('sites')->insert([
            'home_eng_ambiental' => 'A Lux Resíduos possui experiência e competência para te auxiliar em alguns assuntos: Licenciamento Ambiental; Planos de Controle Ambienta -PCA; Planos de Recuperação de Áreas Degradadas - PRAD; Planos de Gerenciamento de Resíduos Sólidos - PGRS, entre outros;',
            'home_seguranca' => 'Te ajudamos no cumprimento da Lei, prevenção de riscos, redução de acidentes, primeiros socorros, entre outros.',
            'home_engenharia' => 'Projeto Arquitetônico; Projeto Hidro Sanitário; Projeto Elétrico;             Sist. de Prot. contra Descargas Atmosféricas - SPDA;',
            'home_gerenciamento' => 'Coleta, acondicionamento e disposição final de resíduo',
            'institucional_quem_somos' => 'A LUX RESIDUOS é uma empresa no segmento de engenharia ambiental e segurança do trabalho com enfoque no gerenciamento de resíduos que possibilita garantir a sustentabilidade dos clientes através da parceria equilibrada e sustentável, primando pela responsabilidade socioambiental e respeito à legislação.',
            'institucional_resumo_quem_somos' => 'A LUX RESIDUOS é uma empresa no segmento de engenharia ambiental e segurança do trabalho com enfoque no gerenciamento de resíduos',
            'institucional_missao' => 'Proporcionar aos nossos clientes eficiência e destinação correta dos resíduos, primando pela responsabilidade socioambiental.',
            'institucional_visao' => 'A empresa possui uma postura de responsabilidade com os valores ambientais e sociais. Além de fundamentada na preservação do meio ambiente e melhoria da qualidade de vida das pessoas',
            'institucional_valores' => 'Ser empresa sustentável provedora de soluções para destinação correta de resíduos.',
            'servicos_eng_ambiental' => '<p> Licenciamento Ambiental</p>
                        <p>Planos de Controle Ambienta -PCA</p>
                        <p> Planos de Recuperação de Áreas Degradadas - PRAD</p>
                        <p> Planos de Gerenciamento de Resíduos Sólidos - PGRS</p>
                        <p> Relatório de Controle Ambiental - RCA</p>
                        <p> Relatório Ambiental Preliminar - RAP</p>
                        <p> Consultoria e Assessoria Ambiental</p>
                        <p> Cumprimento de Condicionantes</p>
                        <p> Cadastro Ambiental Rural - CAR</p>
                        <p> Inventário Florestal</p>
                        <p>Outorga D´água</p>
                        <p>Estudos de Fauna e Flora</p>
                        <p> Auditoria e Perícia Ambiental</p>
                        <p> Gestão Ambiental</p>',
            'servicos_seguranca' => ' <p>Prontuário e Treinamento da NR20</p>
                        <p>NR 23 brigada de incêndio</p>
                        <p>NR 33 espaço confinados</p>
                        <p>Primeiros Socorros</p>
                        <p>Direção defensiva (condução segura de veículos)</p>
                        <p>Programas de Segurança do Trabalho</p>
                        <p>PPRA</p>
                        <p>PCMSO</p>
                        <p>LTCAT</p>',
            'servicos_engenharia' => '<p>Projeto Arquitetônico</p>
                        <p>Projeto Hidro Sanitário</p>
                        <p> Projeto Elétrico</p>
                        <p> Sist. de Prot. contra Descargas Atmosféricas - SPDA</p>
                        <p> Projeto de Proteção contra Incêndio e Pânico</p>
                        <p> Projeto Estrutural</p>
                        <p>Aterro Sanitário</p>',
            'servicos_gerenciamento' => '<p>
                            Coleta
                        </p>
                        <p>
                            Acondicionamento
                        </p>
                        <p>
                            Disposição final
                        </p>',
            'venda_texto' => 'Lucrar com seu resíduo nunca foi tão fácil, veja na lista abaixo quais resíduos podem ter dar lucro.',
            'contato_telefone' => '(74) 98811-7964 | (74) 98828-0783 | (74) 98833-8083',
            'contato_whatsapp' => '(74) 98811-7964',
            'contato_email' => 'contatoluxresiduos01@gmail.com',
            'contato_endereco' => 'MRG BR 235, ZONA RURAL, CASA NOVA-BA'


        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
