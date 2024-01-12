# Projeto Laravel - Email Service


## Configuração do Projeto

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/pauloflausino/emailservice.git


Instale as dependências

composer install

Configuração do Banco de Dados:

    Copie o arquivo .env.example para .env e configure as credenciais do banco de dados.
    Execute as migrations e os seeders:

    php artisan migrate --seed

    composer install


Executando o Projeto


php artisan serve


Em DatabaseSeeder cria 10 usuários a senha padrão: password

Servidor de email que utilizer para testar o envio foi: https://mailtrap.io/

Ao acessar http://localhost:8000/enviar-email é salvo a tarefa na queue para envio do e-mail

Para executar a tarefa usa o comando:

php artisan queue:work


Passo 1: Criar a Tarefa Cron

Abra o terminal e execute o comando:

bash

crontab -e


Passo 2: Adicionar a Tarefa Cron

Adicione a seguinte linha para executar o comando php para chamar a rota do microserviço a cada 5 minutos:

*/5 * * * * cd /caminho/do/seu/projeto && php artisan schedule:run >> /dev/null 2>&1

Passo 3: Salvar e Fechar o Editor de Texto

Passo 4: Configurar o Laravel Scheduler

Abra o arquivo app/Console/Kernel.php e adicione a seguinte linha dentro do método schedule:

// app/Console/Kernel.php

protected function schedule(Schedule $schedule)
{
    $schedule->command('queue:work')->everyFiveMinutes();

}

php artisan schedule:run


