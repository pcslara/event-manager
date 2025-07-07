# Sistema Online para Gerenciamento de Eventos do CEFET-RJ campus Petrópolis

## Tecnologias Utilizadas

- **Linguagem de Programação**: PHP
- **Banco de Dados**: MySQL
- **Frontend (View)**: HTML/CSS com framework responsivo (ex: Bootstrap)

---

## Objetivo

Sistema online para gerenciar eventos acadêmicos, científicos ou corporativos. Os eventos podem conter diversas atividades como palestras, minicursos e workshops.

---

## Funcionalidades

### 1. Gerenciamento de Eventos

- Cadastro de eventos com:
  - Nome e descrição
  - Datas e horários
  - Tipos de atividades (ex: palestras, minicursos)
- Geração automática de um **quadro de horários** (grade) das atividades

### 2. Cadastro de Usuários

- Participantes podem se cadastrar diretamente pela plataforma
- Cada usuário pode assumir um ou mais papéis:
  - **Administrador**: gerencia o sistema e cadastra atividades
  - **Palestrante**: vinculado a atividades específicas
  - **Gerente**: declara presenças e gerencia certificados
  - **Participante**: se inscreve e acessa seus certificados

### 3. Inscrição em Atividades

- Participantes escolhem as atividades que desejam participar
- Definição de número máximo de vagas (opcional)

### 4. Lista de Presença

- Geração de **PDF com lista de presença** para cada atividade
- Lista deve conter nome dos inscritos e espaço para assinatura

### 5. Controle de Presença

- Após cada atividade, o gerente marca quais participantes estiveram presentes
- Presença mínima pode ser exigida para emissão de certificado

### 6. Certificados

- Geração de certificados personalizados:
  - Para participantes e palestrantes
  - Informações como nome, título da atividade e carga horária
- Certificados enviados por **e-mail**
- Certificados também disponíveis para **download**

---

## Requisitos Extras

- Interface responsiva (mobile-friendly)
- Sistema de login com recuperação de senha
- Painel administrativo com relatórios e gerenciamento completo
- Logs de acesso e auditoria (opcional)

---

## Estrutura de Papéis

| Papel         | Permissões                                                                 |
|---------------|----------------------------------------------------------------------------|
| Administrador | Cadastra eventos e atividades, gerencia sistema                           |
| Palestrante   | Visualiza informações da atividade que irá ministrar                      |
| Gerente       | Controla presenças e emite certificados                                   |
| Participante  | Inscreve-se em atividades, acessa certificados                            |

---

## Possíveis Extensões Futuras

- Envio de notificações por e-mail ou WhatsApp

---

