# Sistema de Gestão de Denúncias para Jornalistas

## Descrição
Este sistema foi desenvolvido para gerenciar e rastrear ocorrências enviadas por jornalistas através de uma aplicação mobile. Ele permite registrar e atualizar informações dos jornalistas, além de fornecer uma visualização completa de ocorrências com todos os detalhes necessários, como localização via geolocalização, dados pessoais, e fotografias.

## Finalidade
O sistema visa garantir a segurança dos jornalistas, oferecendo uma ferramenta robusta para monitorar e responder rapidamente a situações de risco, como ataques, sequestros, e outras formas de violência.

## Área de Atuação
Segurança

## Framework Utilizado
- **Framework:** Laravel 5.8

## Funcionalidades
- **Registro e atualização de jornalistas:** Registra e atualiza informações de jornalistas, incluindo dados pessoais, contatos, e localização.
- **Registro de ocorrências:** Recebe e registra ocorrências enviadas pelos jornalistas via APIs específicas.
- **Visualização de ocorrências em mapa:** Permite visualizar todas as ocorrências em um mapa, com detalhes sobre a localização e o estado do jornalista.
- **Rastreamento de jornalistas:** Monitora e rastreia a localização de jornalistas em tempo real para garantir sua segurança.

## Instalação

### Pré-requisitos
- Certifique-se de ter o [Composer](https://getcomposer.org/) instalado.
- PHP versão 7.1.3 ou superior deve estar configurado no ambiente.

### Passos de Instalação



1. **Clone o repositório:**
   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   cd seu-repositorio
2. **Instale as dependências do projeto:**
   ```bash
   composer install
3. **Configure o arquivo de ambiente .env:**
   ```bash
   cp .env.example .env
4. **Gere a chave da aplicação:**
    ```bash
    php artisan key:generate
5. **Execute as migrações do banco de dados:**
   ```bash
   php artisan migrate
6. **Inicie o servidor de desenvolvimento:**
   ```bash
    php artisan serve
O servidor estará acessível em http://localhost:8000.
