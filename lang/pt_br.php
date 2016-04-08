<?php
require_once('Language.php');

class pt_br extends Language
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function _LoadDates()
    {
        $dates = array();

        $dates['general_date'] = 'd/m/Y';
        $dates['general_datetime'] = 'd/m/Y H:i:s';
        $dates['schedule_daily'] = 'l, d/m/Y';
        $dates['reservation_email'] = 'd/m/Y @ H:i (e)';
        $dates['res_popup'] = 'd/m/Y H:i';
        $dates['dashboard'] = 'l, d/m/Y H:i';
        $dates['period_time'] = "H:i";
        $dates['general_date_js'] = "dd/mm/yy";
        $dates['calendar_time'] = 'H:mm';
        $dates['calendar_dates'] = 'd/M';

        $this->Dates = $dates;
    }

    protected function _LoadStrings()
    {
        $strings = array();

        $strings['FirstName'] = 'Nome';
        $strings['LastName'] = 'Sobrenome';
        $strings['Timezone'] = 'Fuso Horário';
        $strings['Edit'] = 'Editar';
        $strings['Change'] = 'Alterar';
        $strings['Rename'] = 'Renomear';
        $strings['Remove'] = 'Remover';
        $strings['Delete'] = 'Excluir';
        $strings['Update'] = 'Atualizar';
        $strings['Reschedule'] = 'Reagendar';
        $strings['Cancel'] = 'Cancelar';
        $strings['Return'] = 'Voltar';
        $strings['Add'] = 'Adicionar';
        $strings['Name'] = 'Nome';
        $strings['Code'] = 'C&oacute;digo';
        $strings['Brand'] = 'Marca';
        $strings['Brands'] = 'Marcas';
        $strings['Department'] = 'Departamento';
        $strings['Yes'] = 'Sim';
        $strings['No'] = 'N&atilde;o';
        $strings['NameRequired'] = 'Nome &eacute; obrigatório.';
        $strings['FirstNameRequired'] = 'Nome &eacute; obrigatório.';
        $strings['LastNameRequired'] = 'Sobrenome &eacute; obrigatório.';
        $strings['DateBirthRequired'] = 'Data de Nascimento &eacute; obrigatório.';
        $strings['StreetRequired'] = 'Rua &eacute; obrigatório.';
        $strings['NumberRequired'] = 'Número &eacute; obrigatório.';
        $strings['ComplementRequired'] = 'Complemento &eacute; obrigatório.';
        $strings['DistrictRequired'] = 'Bairro &eacute; obrigatório.';
        $strings['zipCodeRequired'] = 'CEP &eacute; obrigatório.';
        $strings['CityRequired'] = 'Cidade &eacute; obrigatório.';
        $strings['StateRequired'] = 'Estado &eacute; obrigatório.';
        $strings['PhoneRequired'] = 'Telefone &eacute; obrigatório.';
        $strings['MessageRequired'] = 'Mensagem &eacute; obrigatória.';
        $strings['PwMustMatch'] = 'Confirma&ccedil;&atilde;o de senha devem coincidir com a senha.';
        $strings['PwComplexity'] = 'A senha deve ter pelo menos 6 caracteres com uma combina&ccedil;&atilde;o de letras, números e símbolos.';
        $strings['PasswordError'] = 'A senha deve ter pelo menos 6 caracteres com uma combina&ccedil;&atilde;o de letras, números e símbolos.';
        $strings['PasswordErrorRequirements'] = 'A senha deve ter pelo menos 6 caracteres com uma combina&ccedil;&atilde;o de letras, números e símbolos.';
        $strings['ValidEmailRequired'] = 'Um endere&ccedil;o de e-mail válido &eacute; obrigatório.';
        $strings['UniqueEmailRequired'] = 'Este endere&ccedil;o de e-mail já está cadastrado.';
        $strings['UniqueUsernameRequired'] = 'Esse nome de usuário já está cadastrado.';
        $strings['UserNameRequired'] = 'Nome de usuário &eacute; obrigatório.';
        $strings['CaptchaMustMatch'] = 'Por favor digite as letras da imagem de seguran&ccedil;a exatamente como mostrado.';
        $strings['Today'] = 'Hoje';
        $strings['Week'] = 'Semana';
        $strings['Month'] = 'Mês';
        $strings['BackToCalendar'] = 'Voltar ao calendário';
        $strings['DateHour'] = 'Data/Hora';
        $strings['BeginDate'] = 'Início';
        $strings['EndDate'] = 'Final';
        $strings['Color'] = 'Cor';
        $strings['RegisterType'] = 'Tipo de Usuário';
        $strings['ProfessionalSpeciality'] = 'Especialidade do Profissional';
        $strings['MainNavigation'] = 'MENU PRINCIPAL';
        $strings['LoginAcces'] = 'ACESSO AO SISTEMA';
        $strings['Username'] = 'Usuário';
        $strings['Password'] = 'Senha';
        $strings['PasswordConfirm'] = 'Confirmar Senha';
        $strings['DefaultPage'] = 'Página Inicial Padr&atilde;o';
        $strings['Registration'] = 'Cadastro';
        $strings['DateBirth'] = 'Data de Nascimento';
        $strings['Sex'] = 'Sexo';
        $strings['Level1'] = 'Nivel 1';
        $strings['Level2'] = 'Nivel 2';
        $strings['ShortCode'] = 'Cód. do Item';
        $strings['BarCode'] = 'Cód. de Barras';
        $strings['Price'] = 'Preço';
        $strings['Stock'] = 'Estoque';
        $strings['Weight'] = 'Peso(Kg)';
        $strings['Height'] = 'Altura(cm)';
        $strings['Width'] = 'Largura(cm)';
        $strings['Lenght'] = 'Comprimento(cm)';
        $strings['LenghtTable'] = 'Comp.(cm)';
        $strings['Picture'] = 'Foto';
        $strings['Product'] = 'Produto';
        $strings['ProductCodeName'] = 'Nome ou Código do Produto';
        $strings['PayBox'] = 'Caixa';
        $strings['EmptyPayBox'] = 'Não há produtos no carrinho';
        $strings['ProductCodePayBox'] = 'Cód. de Barras/Cód. do Item';
        $strings['ProductQuantityPayBox'] = 'Qtde.';
        $strings['ClientPayment'] = 'Valor Pago pelo Cliente';
        $strings['ChangePayBox'] = 'Troco';
        $strings['Subtotal'] = 'Subtotal.';
        $strings['Total'] = 'Total.';
        $strings['Checkout'] = 'Finalizar';
        $strings['Currency'] = 'R$';
        $strings['ClientIdRequired'] = 'Cliente Não Informado';
        $strings['ItemsPayBoxRequired'] = 'Inserir Pelo Menos Um Produto';
        $strings['ClientPaymentRequired'] = 'Inserir Pagamento';
        $strings['ChangePayBoxRequired'] = 'Troco Não Calculado';
        $strings['PayBoxPaymentRequired'] = 'Pagamento Menor Que O Total';
        $strings['PayBoxTotalRequired'] = 'Total Não Calculado';
        $strings['ManagePicture'] = 'Gerenciar Foto';
        $strings['CurrentPicture'] = 'Foto Atual';
        $strings['Address'] = 'Endere&ccedil;o';
        $strings['Street'] = 'Rua';
        $strings['Number'] = 'Número';
        $strings['Complement'] = 'Complemento';
        $strings['District'] = 'Bairro';
        $strings['ZipCode'] = 'CEP';
        $strings['City'] = 'Cidade';
        $strings['State'] = 'Estado';
        $strings['ShowHide'] = 'Mostrar/Esconder';
        $strings['Error'] = 'Erro';
        $strings['ReturnToPreviousPage'] = 'Clique aqui para retornar para a página anterior';
        $strings['UnknownError'] = 'Erro Desconhecido';
        $strings['InsufficientPermissionsError'] = 'Você n&atilde;o tem permiss&atilde;o para acessar este recurso';
        $strings['MissingReservationResourceError'] = 'Um recurso n&atilde;o foi selecionado';
        $strings['MissingReservationScheduleError'] = 'A agenda n&atilde;o foi selecionada';
        $strings['DoesNotRepeat'] = 'N&atilde;o repetir';
        $strings['Daily'] = 'Diário';
        $strings['Weekly'] = 'Semanal';
        $strings['Monthly'] = 'Mensal';
        $strings['Yearly'] = 'Anual';
        $strings['RepeatPrompt'] = 'Repetir';
        $strings['hours'] = 'horas';
        $strings['days'] = 'dias';
        $strings['weeks'] = 'semanas';
        $strings['months'] = 'meses';
        $strings['years'] = 'anos';
        $strings['day'] = 'dia';
        $strings['week'] = 'semana';
        $strings['month'] = 'mês';
        $strings['year'] = 'ano';
        $strings['Create'] = 'Criar';
        $strings['Print'] = 'Imprimir';
        $strings['ShowHideNavigation'] = 'Mostrar/Esconder Navega&ccedil;&atilde;o';
        $strings['Tomorrow'] = 'Amanh&atilde;';
        $strings['LaterThisWeek'] = 'Ainda esta semana';
        $strings['NextWeek'] = 'Próxima Semana';
        $strings['SignOut'] = 'Sair';
        $strings['TakeOffline'] = 'Colocar Offline';
        $strings['BringOnline'] = 'Colocar Online';
        $strings['AddImage'] = 'Adicionar Imagem';
        $strings['NoImage'] = 'Nenhuma Imagem Atribuída';
        $strings['Move'] = 'Mover';
        $strings['AppearsOn'] = 'Aparece Em %s';
//        $strings['Location'] = 'Local';
        $strings['Location'] = 'Onde Estamos';
        $strings['NoLocationLabel'] = '(nenhum local definido)';
        $strings['NoContactLabel'] = '(nenhuma informa&ccedil;&atilde;o de contato)';
        $strings['Description'] = 'Descri&ccedil;&atilde;o';
        $strings['NoDescriptionLabel'] = '(nenhuma descri&ccedil;&atilde;o)';
        $strings['Notes'] = 'Notas';
        $strings['NoNotesLabel'] = '(nenhuma nota)';
        $strings['NoTitleLabel'] = '(nenhum título)';
        $strings['UsageConfiguration'] = 'Configura&ccedil;&atilde;o de Uso';
        $strings['ChangeConfiguration'] = 'Alterar Configura&ccedil;&atilde;o';
        $strings['AddNewUser'] = 'Adicionar Novo Usuário';
        $strings['AddUser'] = 'Adicionar Usuário';
        $strings['AddDepartment'] = 'Adicionar Departamento';
        $strings['AddProduct'] = 'Adicionar Produto';
        $strings['AddColor'] = 'Adicionar Cor';
        $strings['AddBrand'] = 'Adicionar Marca';
        $strings['Capacity'] = 'Capacidade';
        $strings['Access'] = 'Acesso';
        $strings['Duration'] = 'Dura&ccedil;&atilde;o';
        $strings['Active'] = 'Ativo';
        $strings['Inactive'] = 'Inativo';
        $strings['ResetPassword'] = 'Redefinir Senha';
        $strings['LastLogin'] = 'Último Acesso';
        $strings['Search'] = 'Pesquisar';
        $strings['SelectUser'] = 'Selecionar Usuário';
        $strings['Groups'] = 'Grupos';
        $strings['ResetPassword'] = 'Redefinir Senha';
        $strings['AllUsers'] = 'Todos os Usuários';
        $strings['AllDepartments'] = 'Todos os Departamentos';
        $strings['AllProducts'] = 'Todos os Produtos';
        $strings['AllBrands'] = 'Todas as Marcas';
        $strings['AllFleets'] = 'Todos os Veículos';
        $strings['AllGroups'] = 'Todos os Grupos';
        $strings['UsernameOrEmail'] = 'Usuário ou Email';
        $strings['Members'] = 'Membros';
        $strings['ApplyUpdatesTo'] = 'Aplicar Atualiza&ccedil;ões Para';
        $strings['Attending'] = 'Atender';
        $strings['FindUser'] = 'Encontrar Usuário';
        $strings['FindDepartment'] = 'Encontrar Departamento';
        $strings['FindProduct'] = 'Encontrar Produto';
        $strings['FindBrand'] = 'Encontrar Marca';
        $strings['Created'] = 'Criado';
        $strings['LastModified'] = 'Última Modifica&ccedil;&atilde;o';
        $strings['GroupName'] = 'Nome do Grupo';
        $strings['GroupMembers'] = 'Membros do Grupo';
        $strings['GroupRoles'] = 'Regras do Grupo';
        $strings['GroupAdmin'] = 'Administrador do Grupo';
        $strings['Actions'] = 'A&ccedil;ões';
        $strings['CurrentPassword'] = 'Senha Atual';
        $strings['NewPassword'] = 'Nova Senha';
        $strings['InvalidPassword'] = 'Senha atual está incorreto';
        $strings['PasswordChangedSuccessfully'] = 'Sua senha foi alterada com sucesso';
        $strings['SignedInAs'] = 'Logado como';
        $strings['NotSignedIn'] = 'Você n&atilde;o está logado';
        $strings['Add'] = 'Adicionar';
        $strings['QuantityAvailable'] = 'Quantidade Disponível';
        $strings['User'] = 'Usuário';
        $strings['ClearFilter'] = 'Limpar Filtro';
        $strings['AdvancedFilter'] = 'Filtro Avan&ccedil;ado';
        $strings['Status'] = 'Estado';
        $strings['Approve'] = 'Aprovar';
        $strings['Page'] = 'Página';
        $strings['Rows'] = 'Linhas';
        $strings['Unlimited'] = 'Ilimitado';
        $strings['Email'] = 'E-mail';
        $strings['EmailAddress'] = 'Endere&ccedil;o de Email';
        $strings['Phone'] = 'Telefone';
        $strings['Message'] = 'Mensagem';
        $strings['Language'] = 'Idioma';
        $strings['Permissions'] = 'Permissões';
        $strings['Reset'] = 'Resetar';
        $strings['FindGroup'] = 'Encontrar Grupo';
        $strings['Manage'] = 'Gerenciar';
        $strings['None'] = 'Nenhum';
        $strings['AddToOutlook'] = 'Adicionar ao Outlook';
        $strings['Done'] = 'Concluído';
        $strings['IdAdmin'] = 'Id Admin';
        $strings['RememberMe'] = 'Lembrar-se de Mim';
        $strings['FirstTimeUser?'] = 'Usuário Novo?';
        $strings['CreateAnAccount'] = 'Criar Uma Conta';
        $strings['ForgotMyPassword'] = 'Eu Esqueci Minha Senha';
        $strings['YouWillBeEmailedANewPassword'] = 'Você receberá um email uma nova senha gerada aleatoriamente';
        $strings['Close'] = 'Fechar';
        $strings['ExportToCSV'] = 'Exportar para CSV';
        $strings['OK'] = 'OK';
        $strings['Working'] = 'Trabalhando...';
        $strings['Login'] = 'Login';
        $strings['AdditionalInformation'] = 'Informa&ccedil;ões Adicionais';
        $strings['AllFieldsAreRequired'] = 'todos os campos s&atilde;o obrigatórios';
        $strings['Optional'] = 'opcional';
        $strings['YourProfileWasUpdated'] = 'Seu perfil foi atualizado';
        $strings['YourSettingsWereUpdated'] = 'Suas configura&ccedil;&otilde;es foram atualizadas';
        $strings['Register'] = 'Cadastrar';
        $strings['RegisterYourself'] = 'Cadastre-se';
        $strings['RegisterInfo'] = 'Para agendar uma consulta, é necessário estar autenticado no sistema. Caso não possua cadastro conosco, clique no botão abaixo e aproveite as vantagens do AgendeVoce.';
        $strings['SecurityCode'] = 'Código de Seguran&ccedil;a';
        $strings['PreferenceSendEmail'] = 'Envie-me um e-mail';
        $strings['PreferenceNoEmail'] = 'N&atilde;o me notificar';
        $strings['NoResultsA'] = 'Nenhuma %s encontrada!';
        $strings['NoResultsO'] = 'Nenhum %s encontrado!';
        $strings['ChangeUser'] = 'Alterar Usuário';
        $strings['QuantityRequested'] = 'Quantidade Solicitada';
        $strings['DeleteWarning'] = 'Esta a&ccedil;&atilde;o &eacute; permanente e irrecuperável!';
        $strings['Reason'] = 'Raz&atilde;o';
        $strings['Filter'] = 'Filtro';
        $strings['Between'] = 'Entre';
        $strings['CreatedBy'] = 'Criado Por';
        $strings['UsersInGroup'] = 'Usuários neste grupo';
        $strings['Browse'] = 'Navegar';
        $strings['DeleteGroupWarning'] = 'Excluindo este grupo irá remover todas as permissões de recursos associados. Os usuários deste grupo podem perder o acesso aos recursos.';
        $strings['WhatRolesApplyToThisGroup'] = 'Que regras se aplicam a esse grupo?';
        $strings['WhoCanManageThisGroup'] = 'Quem pode gerenciar este grupo?';
        $strings['AddGroup'] = 'Adicionar Grupo';
        $strings['Approving'] = 'Aprovar';
        $strings['MakeDefault'] = 'Tornar Padr&atilde;o';
        $strings['BringDown'] = 'Mover para Baixo';
        $strings['StartsOn'] = 'Inicia em';
        $strings['Format'] = 'Formato';
        $strings['OptionalLabel'] = 'Título Opcional';
        $strings['AddUser'] = 'Adicionar Usuário';
        $strings['UserPermissionInfo'] = 'O acesso efetivo ao recurso pode ser diferente dependendo da fun&ccedil;&atilde;o do usuário, permissões de grupo, ou defini&ccedil;ões de permissões externas';
        $strings['DeleteUserWarning'] = 'Excluir este usuário irá remover todas as suas reservas atuais, futuros e histórico.';
        $strings['Priority'] = 'Prioridade';
        $strings['Pending'] = 'Pendente';
        $strings['Past'] = 'Passado';
        $strings['Restricted'] = 'Restrito';
        $strings['ViewAll'] = 'Ver Todos';
	$strings['Customization'] = 'Personaliza&ccedil;&atilde;o';
	$strings['Category'] = 'categoria';
        $strings['CategoryReservation'] = 'Reservar';
        $strings['CategoryGroup'] = 'Grupo';
	$strings['Responsibilities'] = 'Responsabilidades';
	$strings['Notes'] = 'Notas';
        $strings['NoNotesLabel'] = '(nenhuma nota)';
	$strings['Title'] = 'Título';
	$strings['DisplayLabel'] = 'Nome de exibi&ccedil;&atilde;o';
	$strings['Type'] = 'Tipo';
	$strings['Required'] = 'Necessário';
	$strings['ValidationExpression'] = 'Express&atilde;o de valida&ccedil;&atilde;o';
	$strings['SortOrder'] = 'Ordem de exibi&ccedil;&atilde;o';
        $strings['SingleLineTextbox'] = 'Caixa de texto linha única';
        $strings['MultiLineTextbox'] = 'Caixa de texto linhas múltiplas';
        $strings['Checkbox'] = 'Caixa de sele&ccedil;&atilde;o';
        $strings['SelectList'] = 'Lista de sele&ccedil;&atilde;o';
        // Store
        $strings['Store'] = 'Loja';
        $strings['storeParameters'] = 'Param&ecirc;tros da Loja';
        $strings['ManageStoreParameters'] = 'Gerenciar Param&ecirc;tros da Loja';
        $strings['UpdateStoreParameter'] = 'Atualizar Param&ecirc;tros da Loja';
        $strings['StoreParameterId'] = 'Id';
        $strings['CompanyName'] = 'Razão Social';
        $strings['FancyName'] = 'Nome Fantasia';
        $strings['TradingName'] = 'Nome Fantasia';
        $strings['Cnpj'] = 'Cnpj';
        $strings['StateRegistration'] = 'Inscri&ccedil;&atilde;o Estadual';
        $strings['OpeningDate'] = 'Data de Abertura';
        $strings['RegistrationNumber'] = 'N&uacute;mero de Inscri&ccedil;&atilde;o';
        $strings['StoreMainEconomicActivityCode'] = 'C&oacute;digo da Atividade Econ&ocirc;mica Principal';
        $strings['StoreMainEconomicActivityDescription'] = 'Descri&ccedil;&atilde;o da Atividade Econ&ocirc;mica Principal';
        $strings['StoreLegalStatusCode'] = 'C&oacute;digo da Natureza Jur&iacute;dica';
        $strings['StoreLegalStatusDescription'] = 'Descri&ccedil;&atilde;o da Natureza Jur&itilde;dica';
        $strings['StoreAddress'] = 'Logradouro';
        $strings['StoreAddressNumber'] = 'N&uacute;mero';
        $strings['StoreAddressComplement'] = 'Complement';
        $strings['StoreAddressZipCode'] = 'CEP';
        $strings['StoreAddressDistrict'] = 'Bairro';
        $strings['StoreAddressCity'] = 'Cidade';
        $strings['StoreAddressState'] = 'Estado';
        $strings['StoreEmail'] = 'E-mail';
        $strings['StorePhone1'] = 'Telefone 1';
        $strings['StorePhone2'] = 'Telefone 2';
        $strings['StoreSituation'] = 'Situa&ccedil;&atilde;o Cadastral';
        // Users
        $strings['employees'] = 'Funcion&aacute;rios';
        $strings['clients'] = 'Clientes';
        $strings['providers'] = 'Fornecedores';
        // Clients
        $strings['clients'] = 'Clientes';
        $strings['ManageClients'] = 'Gerenciar Clientes';
        $strings['ManageProviders'] = 'Gerenciar Fornecedores';
        $strings['AllClients'] = 'Todos os Clientes';
        $strings['AllProviders'] = 'Todos os Fornecedores';
        $strings['FindClient'] = 'Encontrar Cliente';
        $strings['FindProvider'] = 'Encontrar Fornecedor';
        $strings['AddClient'] = 'Adicionar Cliente';
        $strings['AddProvider'] = 'Adicionar Fornecedor';
        $strings['ClientCode'] = 'C&oacute;digo do Cliente';
        $strings['ClientDocument'] = 'Documento (Cpf, Rg...)';
        // Financial
        $strings['Financial'] = 'Financeiro';
        $strings['paymentMethods'] = 'Formas de Pagamento';
        $strings['ManagePaymentMethods'] = 'Gerenciar Formas de Pagamento';
        $strings['FindPaymentMethod'] = 'Encontrar Forma de Pagamento';
        $strings['AllPaymentMethods'] = 'Todas as Formas de Pagamento';
        $strings['AddPaymentMethod'] = 'Adicionar Forma de Pagamento';
        $strings['Installments'] = 'Parcelas';
        $strings['Discount'] = 'Desconto';
        //Caixa
        $strings['payBox'] = 'Caixa';
        // Departments
        $strings['Departments'] = 'Departamentos';
        $strings['DepartmentsTable'] = 'Deptos';
        $strings['ProvidersTable'] = 'Fornec';
        // Produtos
        $strings['Products'] = 'Produtos';
        $strings['manageProduct'] = 'Gerenciar Produtos';
        $strings['ManageItems'] = 'Gerenciar Itens';
        $strings['manageItem'] = 'Gerenciar Itens';
        $strings['manageDepartment'] = 'Gerenciar Departamentos';
        $strings['manageBrand'] = 'Gerenciar Marcas';
        $strings['ManageColors'] = 'Gerenciar Cores';
        $strings['Providers'] = 'Fornecedores';
        // New
        $strings['or'] = 'ou';
        $strings['of'] = 'de';
        $strings['Back'] = 'Anterior';
        $strings['Forward'] = 'Próximo';
        $strings['ViewWeek'] = 'Ver Semana';
        $strings['ViewMonth'] = 'Ver Mês';
        $strings['Choose'] = 'Escolher';
        $strings['CurrentTime'] = 'Hora Atual';
        $strings['ImageUploadDirectory'] = 'Diretório para enviar imagem física';
        $strings['ChangePermissions'] = 'Tente aplicar as permissões corretas';

        // Errors
        $strings['LoginError'] = 'N&atilde;o foi possível encontrar seu usuário ou senha';
        $strings['EmailDisabled'] = 'O administrador desabilitou notifica&ccedil;ões de e-mail';

        // Page Titles
        $strings['CreateReservation'] = 'Criar Reservas';
        $strings['EditReservation'] = 'Editar Reservas';
        $strings['LogIn'] = 'Entrar';
        $strings['ContAct'] = 'Contato';
        $strings['IndEx'] = 'Inicio';
        $strings['Index'] = 'INICIO';
        $strings['NewsandArticles'] = 'Notícias e Artigos';
        $strings['PartNers'] = 'Parceiros';
        $strings['ManageSchedules'] = 'Agendas';
        $strings['ManageResources'] = 'Recursos';
        $strings['ManageAccessories'] = 'Acessórios';
        $strings['ManageUsers'] = 'Usuários';
        $strings['ManageEducation'] = 'Formação';
        $strings['ManageSpecialities'] = 'Especialidades';
        $strings['ManageBrands'] = 'Marcas';
        $strings['ManageDepartments'] = 'Departamentos';
        $strings['ManageProducts'] = 'Produtos';
        $strings['ManageGroups'] = 'Grupos';
        $strings['TermsofService'] = 'Termos de Uso';
        $strings['AboutEnterprise'] = 'Sobre a Empresa';
        $strings['NotFound'] = 'Pagina Nao Encontrada :( ';
        $strings['ManageBlackouts'] = 'Bloqueios';
        $strings['MyDashboard'] = 'Meu Painel de Controle';
        $strings['ServerSettings'] = 'Configura&ccedil;ões do Servidor';
        $strings['Dashboard'] = 'Painel de Instrumentos';
        $strings['ControlPanel'] = 'Painel de Controle';
        $strings['moreInfo'] = 'Mais Informações';
        $strings['Help'] = 'Ajuda';
        $strings['Administration'] = 'Administra&ccedil;&atilde;o';
        $strings['About'] = 'Sobre';
        $strings['AboutUs'] = 'AEmpresa';
        $strings['Aboutus'] = 'A EMPRESA';
        $strings['Bookings'] = 'Reservas';
        $strings['Schedule'] = 'Agenda';
        $strings['Account'] = 'Conta';
        $strings['EditProfile'] = 'Editar Meu Perfil';
        $strings['Profile'] = 'Meu Perfil';
        $strings['FindAnOpening'] = 'Encontrar Uma Abertura';
        $strings['OpenInvitations'] = 'Abrir Convites';
        $strings['MyCalendar'] = 'Meu Calendário';
        $strings['ResourceCalendar'] = 'Calendário de Recursos';
        $strings['Reservation'] = 'Nova Reserva';
        $strings['Install'] = 'Instala&ccedil;&atilde;o';
        $strings['ChangePassword'] = 'Alterar Senha';
        $strings['MyAccount'] = 'Minha Conta';
        $strings['Profile'] = 'Perfil';
        $strings['newOrders'] = 'Pedidos Novos';
        $strings['dayOrders'] = 'Compras - Dia';
        $strings['monthOrders'] = 'Compras - Mês';
        $strings['yearOrders'] = 'Compras - Ano';
        $strings['LatestOrders'] = '&Uacute;timas Compras';
        $strings['OrderId'] = 'Código da Compra';
        $strings['OrderDateTime'] = 'Data/Hora';
        $strings['OrderTotal'] = 'Valor da Compra';
        $strings['PlaceNewOrder'] = 'Nova Compra';
        $strings['ViewAllOrders'] = 'Ver Todas as Compras';
        $strings['Client'] = 'Cliente';
        $strings['ContAct'] = 'Contato';
        $strings['Contact'] = 'CONTATO';
        $strings['activeClients'] = 'Clientes Ativos';
        $strings['bounceRate'] = 'Taxa de Rejeição';
        $strings['ApplicationManagement'] = 'Gerenciamento de Aplicativos';
        $strings['ForgotPassword'] = 'Esqueceu a Senha';
        $strings['Reports'] = 'Relatórios';
        $strings['GenerateReport'] = 'Criar Novo Relatório';
        $strings['MySavedReports'] = 'Meus Relatórios Salvos';
        $strings['CommonReports'] = 'Relatórios Gerais';
        $strings['ViewDay'] = 'Visualizar dia';
        $strings['Group'] = 'Grupo';
        $strings['ManageConfiguration'] = 'Configurar Aplica&ccedil;&atilde;o';
        $strings['LookAndFeel'] = 'Temas';
        $strings['ConfigurationUpdateHelp'] = 'Consulte a se&ccedil;&atilde;o de configura&ccedil;&atilde;o do <a target=_blank href=%s>Arquivo de Ajuda</a> para documenta&ccedil;&atilde;o sobre essas configura&ccedil;ões.';
        $strings['GeneralConfigSettings'] = 'configura&ccedil;ões';
        $strings['All'] = 'Todos';
        $strings['True'] = 'Verdadeiro';
        $strings['False'] = 'Falso';
        $strings['Logo'] = 'Logo';
        $strings['CssFile'] = 'Arquivo CSS';
        $strings['Select'] = 'Sele&ccedil;&atilde;o';
        $strings['Usage'] = 'Uso';
        $strings['Range'] = 'Período';
        $strings['FilterBy'] = 'Filtrar Por';
        $strings['List'] = 'Listar';
        $strings['TotalTime'] = 'Tempo Total';
        $strings['Count'] = 'Contar';
        $strings['AllTime'] = 'Total';
        $strings['CurrentMonth'] = 'Mês Atual';
        $strings['CurrentWeek'] = 'Semana Atual';
        $strings['AllAccessories'] = 'Todos os Acessórios';
        $strings['GetReport'] = 'Gerar Relatório';
        $strings['NoSavedReports'] = 'Você n&atilde;o tem relatórios salvos.';
        $strings['Top20UsersTimeBooked'] = 'Top 20 Usuários - Tempo Reservado';
        $strings['Top20UsersReservationCount'] = 'Top 20 Usuários - Contagem de Reservas';
        $strings['ViewAsChart'] = 'Visualizar Gráfico';
        $strings['NoResultsFound'] = 'Nenhum resultado encontrado';
        $strings['AggregateBy'] = 'Agregar Por';
        $strings['Total'] = 'Total';
        $strings['SaveThisReport'] = 'Salvar Este Relatório';
        $strings['ReportSaved'] = 'Relatório Salvo!';
        $strings['RunReport'] = 'Executar Relatório';
        $strings['EmailReport'] = 'Enviar Relatório';
        $strings['Accept'] = 'Aceitar';
        $strings['Decline'] = 'Recusar';
        $strings['ConfigurationUpdated'] = 'O arquivo de configura&ccedil;&atilde;o foi atualizado';
        $strings['ThemeUploadSuccess'] = 'As suas mudan&ccedil;as foram salvas. Recarregue a página para as mudan&ccedil;as terem efeito.';
        $strings['PossibleValues'] = 'Valores possíveis';
        //

        // Day representations
        $strings['DaySundaySingle'] = 'D';
        $strings['DayMondaySingle'] = 'S';
        $strings['DayTuesdaySingle'] = 'T';
        $strings['DayWednesdaySingle'] = 'Q';
        $strings['DayThursdaySingle'] = 'Q';
        $strings['DayFridaySingle'] = 'S';
        $strings['DaySaturdaySingle'] = 'S';

        $strings['DaySundayAbbr'] = 'Dom';
        $strings['DayMondayAbbr'] = 'Seg';
        $strings['DayTuesdayAbbr'] = 'Ter';
        $strings['DayWednesdayAbbr'] = 'Qua';
        $strings['DayThursdayAbbr'] = 'Qui';
        $strings['DayFridayAbbr'] = 'Sex';
        $strings['DaySaturdayAbbr'] = 'Sab';

        // Email Subjects
        $strings['ResetPassword'] = 'Pedido de Redefinição de Senha';
        $strings['ContactMail'] = 'Contato de %s';
        $strings['ForgotPasswordEmailSent'] = 'Um email foi enviado para o endere&ccedil;o fornecido com instru&ccedil;ões para redefinir sua senha';
        //

        $this->Strings = $strings;
    }

    protected function _LoadDays()
    {
        $days = array();

        /***
        DAY NAMES
        All of these arrays MUST start with Sunday as the first element
        and go through the seven day week, ending on Saturday
         ***/
        // The full day name
        $days['full'] = array('Domingo', 'Segunda', 'Ter&ccedil;a', 'Quarta', 'Quinta', 'Sexta', 'Sábado');
        // The three letter abbreviation
        $days['abbr'] = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab');
        // The two letter abbreviation
        $days['two'] = array('Do', 'Se', 'Te', 'Qu', 'Qu', 'Se', 'Sa');
        // The one letter abbreviation
        $days['letter'] = array('D', 'S', 'T', 'Q', 'Q', 'S', 'S');

        $this->Days = $days;
    }

    protected function _LoadMonths()
    {
        $months = array();

        /***
        MONTH NAMES
        All of these arrays MUST start with January as the first element
        and go through the twelve months of the year, ending on December
         ***/
        // The full month name
        $months['full'] = array('Janeiro', 'Fevereiro', 'Mar&ccedil;o', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
        // The three letter month name
        $months['abbr'] = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');

        $this->Months = $months;
    }

    protected function _LoadLetters()
    {
        $this->Letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    }

    protected function _GetHtmlLangCode()
    {
        return 'pt_br';
    }
}

?>