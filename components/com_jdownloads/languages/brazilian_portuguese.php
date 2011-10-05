<?php
/**
* @version 1.4
* @package JDownloads
* @copyright (C) 2008 Arno Betz - www.joomlaaddons.de
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* 
* ======================
// German translation from doQment by David Jakob (aka iamalive) 2007.05.16
// http://www.websites4u.ch / admin@websites4u.ch
//
// Translation for http://www.Joomlaportal.ch
// Demo: http://demo.joomlaaddons.de 
//
// Modified by Arno Betz for jDownloads - http://www.Joomlaaddons.de
// Q&T Team Achim Raji (aka cybergurk) - http://www.filmanleitungen.de
//
// JDownloads 1.4-RC translated to Brazilian Portuguese from scratch uniquely for jDownloads
// by Joomla Brasil <joomlabr@joomlabr.org> - http://www.joomlabr.org
//
// JDownloads 1.1 alpha translated to English for http://www.Joomlaaddons.de
// by Lucio Bresser <info@per-ipsum.org> - http://www.per-ipsum.org

// JDownloads 1.2 alpha (first draft) translated to English for http://www.Joomlaaddons.de
// by Daniel Pardons  (aka dpardons) - http://www.joompad.be
*/

(defined('_VALID_MOS') OR defined('_JEXEC')) or die('Restricted access');

// Components Infos
//-----------------------------------------------------------
// It is not allowed to change or delete this parameters !!!
DEFINE('_JLIST_PRODUCT','jDownloads');
DEFINE('_JLIST_VERSION','<br /><br />Please give me a feedback in the Forum on <a href="http://www.JoomlaAddons.de">www.JoomlaAddons.de</a>.');

DEFINE('_JLIST_PRODUCT_FOOTER','JDownloads');
DEFINE('_JLIST_VERSION_FOOTER','');

// end component infos
//-----------------------------------------------------------

// Installation data

DEFINE('_JLIST_INSTALL_0','Informação de Instalação:');
DEFINE('_JLIST_INSTALL_1','Todos os arquivos de configuração existem no banco de dados!');
DEFINE('_JLIST_INSTALL_2','Arquivos de configuração atualizados.');
DEFINE('_JLIST_INSTALL_3','Todos os layouts padrões existem no banco de dados!');
DEFINE('_JLIST_INSTALL_4','Layouts padrões salvos no banco de dados!');
DEFINE('_JLIST_INSTALL_5','Todas as licenças padrões existem no banco de dados!');
DEFINE('_JLIST_INSTALL_6','Licença(s) padrão(ões) salva(s) no banco de dados!');
DEFINE('_JLIST_INSTALL_7','O diretório de envio existe e está gravável!');
DEFINE('_JLIST_INSTALL_8','O diretório de envio existe e está NÃO é gravável. Altere as permissões CHMOD para 777 para enviar para o diretório, senão o jDownloads não irá funcionar!');
DEFINE('_JLIST_INSTALL_9','Diretório de envio criado. Deve ser configurado CHMOD 777.');
DEFINE('_JLIST_INSTALL_10','Erro: Não foi possível criar o diretório de envio!<br />Crie-o via FTP e configure as permissões CHMOD em 777 para enviar os arquivos ao diretório, senão o jDownloads não irá funcionar!');
DEFINE('_JLIST_INSTALL_11','O diretório temporário para .zip existe e é gravável!');
DEFINE('_JLIST_INSTALL_12','Os diretórios /downloads/tempzipfiles existem mas não estão graváveis. Altere as permissões CHMOD para 777 do diretório temp, senão o jDownloads não irá funcionar!');
DEFINE('_JLIST_INSTALL_13','Diretórios /downloads/tempzipfiles criados. Permissões: CHMOD 777 - OK.');
DEFINE('_JLIST_INSTALL_14','Erro: Diretório .zip /downloads/tempzipfiles não foim criado!<br />Crie-os via FTP e configure as permissões CHMOD em 777 para enviar os arquivos ao diretório.<br />Senão o jDownloads não irá funcionar!');
DEFINE('_JLIST_INSTALL_15','Instalação concluída com sucesso!');
DEFINE('_JLIST_INSTALL_16','Iniciar jDownloads!');

DEFINE('_JLIST_INSTALL_DB_TIP','Nota: Se você desistalar o jDownloads o banco de dados não será deletado. Então se você usar uma nova versão, o banco de dados poderá ser reaproveitado.');
DEFINE('_JLIST_INSTALL_TITLE_FOR_DEFAULT_LAYOUTS','Padrão');

//FRONTEND

DEFINE('_JLIST_FILE_NOT_FOUND','O arquivo requisitado não existe. Por favor, informe o webmaster..');
DEFINE('_JLIST_LINKTEXT_VIEW_FILE_TYPES','Iniciar download<br />(Exibir em uma nova janela)');
DEFINE('_JLIST_LINKTEXT_ZIP','Iniciar download');
DEFINE('_JLIST_LINKTEXT_DOWNLOAD_URL','Download');
DEFINE('_JLIST_LINKTEXT_HOME','Painel de Controle');
DEFINE('_JLIST_DEL_ZIP_ADMIN_INFO','<br />Informação do Admin: ocorreu um erro durante a exclusão de arquivos temporários zip ou eles não existem!');
DEFINE('_JLIST_FORM_BUTTON_TEXT','Continuar');
DEFINE('_JLIST_EMPTY_CAT_TEXT','Esta categoria não contém nenhum arquivo.<br /><br />');
DEFINE('_JLIST_MAIL_DOWNLOADER_NAME_VISITOR','Visitante');
DEFINE('_JLIST_MAIL_DOWNLOADER_GROUP','Convidado');
DEFINE('_JLIST_MAILSEND_ERROR','Ocorreu um erro ao enviar este e-mail!');
DEFINE('_JLIST_FRONTEND_COUNT_SUBCATS','Subcategorias:');
DEFINE('_JLIST_FRONTEND_COUNT_FILES','Número de arquivos:');
DEFINE('_JLIST_FRONTEND_HOMEPAGE','Inicio');
DEFINE('_JLIST_FRONTEND_BACK_BUTTON','Voltar');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DATE','Data');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LICENCE','Licença');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_AUTHOR','Autor');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_WEBSITE','Website');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_SYSTEM','Sistema');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LANGUAGE','Idioma');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD','Download');
DEFINE('_JLIST_FRONTEND_VERSION_TITLE','Versão: ');
DEFINE('_JLIST_FRONTEND_CAT_ACCESS_REGGED','Para esta categoria precisa ser registrado para efetuar downloads de arquivos. Por favor, efetua login ou registre.<br /><br />');

//BACKEND TOOLBAR
DEFINE('_JLIST_BACKEND_COMPONENT_NAME','JDownloads');
DEFINE('_JLIST_BACKEND_TOOLBAR_MAIN','Painel de Controle');
DEFINE('_JLIST_BACKEND_TOOLBAR_EDIT','Editar');
DEFINE('_JLIST_BACKEND_TOOLBAR_REMOVE','Deletar');
DEFINE('_JLIST_BACKEND_TOOLBAR_CLOSE','Fechar');
DEFINE('_JLIST_BACKEND_TOOLBAR_SUBMAIN','Layouts');

//BACKEND CPANEL
DEFINE('_JLIST_BACKEND_CPANEL_FILES','Downloads');
DEFINE('_JLIST_BACKEND_CPANEL_CATEGORIES','Categorias');
DEFINE('_JLIST_BACKEND_CPANEL_LICENSE','Licenças');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES','Layouts da Administração');
DEFINE('_JLIST_BACKEND_CPANEL_BACKUP','Criação de Backup');
DEFINE('_JLIST_BACKEND_CPANEL_SETTINGS','Configuração');
DEFINE('_JLIST_BACKEND_CPANEL_RESTORE','Restauração de Backup');
DEFINE('_JLIST_BACKEND_CPANEL_INFO','Termos de uso');
DEFINE('_JLIST_BACKEND_CPANEL_SUPPORT','Suporte');

// RESULTS FROM AUTOCHECKFILES OPTION
DEFINE('_JLIST_BACKEND_AUTOCHECK_TITLE','Informaçãoes sobre a verificação da Área de Download:');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_FILES','Novo(s) arquivo(s) encontrados e adicionados à base de downloads');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_FILES','Arquivo(s) não encontrados. A área de downloads não está disponível para o público em geral!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_FILES','Nenhum arquivo novo encontrado!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_FILES','Todos os downloads publicados existem!');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_STATUS','Status');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_2','Versão');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_3','Log de Ações');

// STATUS
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE_HEADER','Status da Área de Download');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_TITEL','<font color="#990000"><b><big>Status da Área de Download:</big></b></font>');

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_ONLINE','Se ONLINE, a área de download está disponível para visitantes.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_ONLINE','<font color="green"><b><big> ONLINE!</big></b></font>');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE','<font color="red"><b><big> OFFLINE!</big></b></font>');

// OFFLINE
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_TITLE','Ativar manutenção?');
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_DESC','Quando você clicar nesta opção, a área de downloads estará "off". Visitantes deverão ver o texto exibido abaixo. Somente membros logados com o perfil de "autor" poderão visualizar a área de download.');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_TITLE','Aviso aos visitantes');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DEFAULT','<table width="70%" align="center" cellspacing="0" cellpadding="20" border="1"><tr><td align="center">
<h3>Neste momento, estão trabalhano na área de downloads.<br /><br />Por favor, tente novamente em alguns minutos.</h3><br /><img src="components/com_jdownloads/images/offline.png" />
</td></tr></table>');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DESC','Insira o texto que deverá ser exibido na área de downloads enquanto estiver em manutenção.');
DEFINE('_JLIST_BACKEND_OFFLINE_ADMIN_MESSAGE_TEXT','<p align="center"><b><big>A àrea de downloads está: OFFLINE!</big></b></p>'); // changed in 1.3 RC2

//BACKEND SETTINGS
DEFINE('_JLIST_BACKEND_SETTINGS','Configuração');
DEFINE('_JLIST_BACKEND_SETTINGS_SAVED','Configurações salvas');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_HEAD','Configuração de E-mail para downloads'); // changed in 1.3 rc2
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILES_HEAD','Configuração de Download');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD','Configuração do Site');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_BACKEND_HEAD','Configuração da Administração');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_SECURITY_HEAD','Definições de Segurança');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_IMAGES_HEAD','Definições de Imagens/Ícones');

DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_DOWNLOADS','Downloads');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_FRONTEND','Site');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_BACKEND','Administração');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_IMAGES','Imagens');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SECURITY','Segurança');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_EMAIL','E-Mail');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SONSTIGE','Outros');

DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME','Formato da Data-Hora');
DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME_DESC','Informações sobre o formato: <a href="http://www.php.net/manual/de/function.strftime.php" target="_blank">www.php.net</a>');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR','Diretório de Upload');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_DESC','Diretório Principal para os arquivos enviados. Este diretório e <b>todos</b> os subdiretórios devem estar graváveis!');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP','Diretório Temporário');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP_DESC','Este diretório existe e está editável! Ele contém os arquivos .zip criados temporariamente (após o download, será automaticamente deletado).');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_1','Padrão');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_2','Novos primeiro');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_3','Novos por último');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_4','Nome crescente');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_5','Nome decrescente');

// E-Mail config
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION_DESC','Se isto estiver ativo, um e-mail será enviado para o endereço abaixo após o término de todos os downloads.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION','Ativar e-mail?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_DESC','Endereço de e-mail para enviar informações de download.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO','Endereço de e-mail');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML_DESC','e esta opção for ativada, e-mails serão enviados no formato HTML. Se não, texto puro será usado.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML','Usar formatação-HTML?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF_DESC','Texto do assunto usado no e-mail.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF','Assunto');

// View Frontend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_HEAD','Opções do componente da página de principal');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT','Descrição do componente');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT_DESC','Texto exibido <b>entre</b> o título do componente e estas categorias. O título do componente será automaticamente derivado do nome do menu.<br /><br />Classes, código HTML e textos arbitrários podem ser incluídos.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT','Texto do caixa de seleção');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT_DESC','Nota a ser exibida pela caixa de seleção do topo da lista.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_TEXT','Ordem de classificação');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_DESC','Ordem em que cada arquivo será exibido na página principal. Selecionar "Padrão" para usar a ordem padrão da administração.');

// View Images settings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS','Exibir símbolos de informação?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS_DESC','Se ativado, o símbolo será exibido. Se desativado, um texto simples será exibido.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE','Tamanho em pixel do símbolo de informações');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE_DESC','Tamanho do símbolo de informação exibido. Padrão: 20');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE','Tamanho em pixel do símbolo da categoria');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE_DESC','Tamanho do símbolo da categoria exibida. Você pode usar seus ícones, somente enviando-os por FTP no subdiretorio: /catimages. Padrão: 48');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE','Tamanho em pixel do simbolo de arquivo');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE_DESC','Tamanho exibido para o(s) arquido(S) de símbolo(s). Você pode usar seus ícones, somente enviando-os por FTP no subdiretorio: /fileimages. Padrão: 32');

// View backend security settings
// to be translated
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_DESC','Se SIM, o endereço de email não será exibido em texto puro a fim de evitar Spambots. Lembrando que se o javascript estiver desabilitado no seu browser, o link não será exibido. Configuração recomendada: SIM.');
//
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_TITEL','Cancelando endereço de e-mail?');

// View backend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS','Usar WYSIWYG-editor para layouts');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS_DESC','Se esta opção estiver ativada, o editor atual WYSIWYG selecionado será usado para editar layouts. Se não, um texto simples será exibido.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES','Usar WYSIWYG-editor para downloads');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES_DESC','Se esta opção estiver ativada, o editor atual WYSIWYG selecionado será usado para editar downloads. Se não, um texto simples será exibido.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS','Usar WYSIWYG-editor para categorias');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS_DESC','Se esta opção estiver ativada, o editor atual WYSIWYG selecionado será usado para editar categorias. Se não, um texto simples será exibido.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES','Usar WYSIWYG-editor para licenças');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES_DESC','Se esta opção estiver ativada, o editor atual WYSIWYG selecionado será usado para editar licenças. Se não, um texto simples será exibido.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST','Selecionar campos de downloads: editar "Sistema"');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST_DESC','Aqui você pode editar as opções propostas para o campo. Entre cada opção você precisa colocar "," como separador. <br /><br /><b>Aviso importante:</b> se você já tiver salvo alguns downloads na lista, é preciso ter cuidado, porque cada mudança é passada para o download. Exemplo: se alguns downloads forem salvos como sistema ="Joomla 1.5", eles deverão ser salvos com outro valor ex. "Windows Vista". Adicionar novos valores no final da lista.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST','Selecionar campos de downloads: editar "Idioma"');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST_DESC','Aqui você pode editar as opções propostas para o campo. Entre cada opção você precisa colocar "," como separador. <br /><br /><b>Aviso importante:</b> se você já tiver salvo alguns downloads na lista, é preciso ter cuidado, porque cada mudança é passada para o download. Exemplo: Os downloads salvos com a linguagem ="Alemão", eles devem ser setados com outro valor ex. "Francês". Adicionar novos valores no final da lista.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_TEXT','Prefixo de titulo padrão para arquivos ZIP');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_DESC','Se são selecionados arquivos múltipolos para download, eles são arquivados automaticamente  em um arquivo ZIP temporária e apresentados ao usuário como um único arquivo para download. O nome do(s) arquivo(s) ZIP é criado do texto especificado à esquerda (prefixo) e um número aleatório.');

// Templates Config Backend
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD','<b>Layouts determinan como o conteudo que será exibido na página principal</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO','<br />Vários layouts padrão serão incluídos na instalação. Eles podem ser customizados como desejado e novos layouts poderão ser criados. Para simplificar, estas configurações você poderá selecionar para usar com o editor WYSIWYG ou uma área de texto simples para edição.<br /><br />No caso do componente da página frontal, você não poderá modificar após efetuar as modificções no <b>layout padrão</b> o <b>conteúdo original</b> (significado do status após a instalação) pode ser restaurado a qualquer hora. Para isso, remover <b>todos os textos</b> no respectivo layout padrão e campos selecionados inseridos <b>Salvar</b>. A página será salva com o conteúdo original. <b>Cuidado:</b> modificações feitas podem ser perdidas.<br /><br />Nota: importantes variáveis são usadas nos layouts (e.g. <font color=darkred>{files}</font>). As variáveis são substituídas pelo atual conteudo gerado no site atual.<br />');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS','Layout: Categorias');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC','Isto é como as <b>categorias</b> serão exibidas na página frontal. Se você tem a opção selecionada <b>Exibir o resumo das categorias como página principal</b> nas configurções globais, os campos reservados (variáveis) {files} e {checkbox_top} (variables) serão usadas para exibir somente uma categoria.<br /><br /><font color=red>{files} {form_hidden} {form_button} {checkbox_top}</font> variables <font color=red>NÃO</font> devem ser removidas do código! Somente remover as variáveis {checkbox_top} do código se a variável {url_download} estiver sendo usada no arquivo de layout. A tag {files} é substituída pelos dados inseridos no layout. <br /><br />Campos reservados disponíveis (variáveis):<br />{cat_title} {cat_description} {cat_pic} {files} {checkbox_top} {sum_subcats} {sum_files_cat}');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TITLE','<b>Layout de Informações da categoria::</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TEXT','<p>Este é um gráfico de exemplo das categorias exibidas na página principal. As bordas vermelhas escuras indicam as áreas que podem ser alteradas. </p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES','Layout: Arquivos');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC','Isto é como os <b>arquivos</b> são exibidos na página principal. <br />Campos reservados disponíveis (variables):<br />{checkbox_list} {cat_id} {file_id} {file_title} {release} {pic_is_new} {pic_is_hot} {pic_is_updated} {thumbnail} {description} {link_to_details} {file_pic} {price_title} {price_value} {license_title} {license_text} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TITLE','<b>Informções sobre layout de arquivo:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TEXT','<p>Exemplo para exibição da lista na página frontal. Dentro da caixa vermelha você pode editar as opções exibidas.</p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL','Layout: Sumário / Iniciar download');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_DESC','Este é o <b>sumário</b> da página frontal exibido. A lista de arquivos selecionados estará presente para os usuários antes dos downloads.<br />Aqui é onde você pode modificar o que será exibido nesta página. Classes CSS, código HTML e testos arbitrários podem ser inseridos.<br /><br />As variáveis <font color=red>{download_liste}</font> <font color=red>NÃ‚O</font> devem ser removidas do código!<br /><br />Campos reservados disponíveis:<br />{summary_pic} {title_text} {download_liste} {license_note} {download_link} {external_download_info}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TITLE','<b>Informação sobre o layout de sumário</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TEXT','<p>Este é um exemplo gráfico da página frontal. A borda vermelha escura indica a área que você pode mudar o que será exibido aqui. </p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL','Layout: E-mail');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DESC','Aqui é onde você pode formatar <b>e-mails</b> que  (quando ativado) serão enviados para o endereço especificado na configuração após cada download. Código HTML e texto arbritário podem ser inclusos.<br /><br />Campos reservados disponíveis:<br /> {file_list} {ip_address} {date_time} {user_name} {user_group}');

//BACKEND CATSLIST
DEFINE('_JLIST_BACKEND_CATSLIST_TITLE_HEAD','Categorias');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH','Pesquisar');
DEFINE('_JLIST_BACKEND_CATSLIST_SEARCH_LIMIT','Limite');

DEFINE('_JLIST_BACKEND_CATSLIST_TITLE','Categoria');
DEFINE('_JLIST_BACKEND_CATSLIST_PIC','Simbolo');
DEFINE('_JLIST_BACKEND_CATSLIST_PUBLISHED','Publicado');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK','Link');
DEFINE('_JLIST_BACKEND_CATSLIST_LINK_TEXT','Visualizar');
DEFINE('_JLIST_BACKEND_CATSLIST_READ','Ler');
DEFINE('_JLIST_BACKEND_CATSLIST_DOWNLOAD','Download');
DEFINE('_JLIST_BACKEND_CATSLIST_ORDERING','Ordenação');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL',' Categoria(s) deletada(s).');

// access controll info
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ALL','Todos');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_REGGED','Registrado');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ADMINS','Especial');

//BACKEND CATSEDIT
DEFINE('_JLIST_BACKEND_CATSEDIT_TITLE','Editar categoria');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE','Categoria deve ter um título');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_PUBL',' Categoria(s) publicada(s).');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_UNPUBL',' Categoria(ies) unpublished.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE_ERROR_DIR','Erro: directório não pode ser renomeado!');
DEFINE('_JLIST_BACKEND_CATSEDIT_EDIT','Editar Categoria');
DEFINE('_JLIST_BACKEND_CATSEDIT_ADD','Adicionar Categoria');
DEFINE('_JLIST_BACKEND_CATS_SAVEORDER','Nova ordenação salva');
DEFINE('_JLIST_BACKEND_CATS_USED','Esta categoria está sendo editada por outro administrador.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_COPY','Uma falha ocorreu durante a operação de cópia da Lista de Categoria.');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_DESCRIPTION','Descrição da Categoria');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_TEXT','SSelecione o símbolo da categoria');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_PREVIEW','Visualizar imagem');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_DESC','Os símbolos selecionados podem ser exibidos com {cat_pic} no layout da categoria.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_TITLE','Configurar permissões');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_DESC','Editar permissões. Definir a permissão do Usuário para as categorias, subdiretórios e os downloads inclusos. <b>Decisivo para acessar SEMPRE as categorias superiores.</b> Se você selecionar "especial", membros com perfil de "autor" podem ler e efetuar download.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_1','Público pode ler e efetuar download');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_2','Público e Usuários Registrados podem ler e efetuar o download');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_3','Somente Usuários Registrados podem ler e efetuar download');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_4','omente Membros Especiais podem ler e efetuar download');

//BACKEND FILESLIST
DEFINE('_JLIST_BACKEND_FILESLIST_TITLE','Downloads');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH','Pesquisar');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH_LIMIT','Limite');
DEFINE('_JLIST_BACKEND_FILESLIST_CATS','Todas Categorias');
DEFINE('_JLIST_BACKEND_FILESLIST_NOCATS','Nenhuma Categoria');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE','Downloads');
DEFINE('_JLIST_BACKEND_FILESLIST_HITS','Número de Downloads');
DEFINE('_JLIST_BACKEND_FILESLIST_CAT','Categoria');
DEFINE('_JLIST_BACKEND_FILESLIST_RELEASE','Versão');

DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION','Descrição');
DEFINE('_JLIST_BACKEND_FILESLIST_DADDED','Data');
DEFINE('_JLIST_BACKEND_FILESLIST_FILENAME','Nome do Arquivo');
DEFINE('_JLIST_BACKEND_FILESLIST_AUTHOR','Autor');
DEFINE('_JLIST_BACKEND_FILESLIST_PUBLISHED','Publicado');
DEFINE('_JLIST_BACKEND_FILESLIST_ORDERING','Ordem');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL',' Download(s) deletado(s)');
DEFINE('_JLIST_BACKEND_FILES_SAVEORDER','Nova ordem salva');
DEFINE('_JLIST_BACKEND_FILES_USED','Este download está sendo editado por outro administrador.');

//BACKEND FILESEDIT
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_1','Base');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_2','Opcional');
DEFINE('_JLIST_BACKEND_FILESEDIT_TABTITLE_3','Arquivos');

DEFINE('_JLIST_BACKEND_FILESEDIT_TITLE','Editar Download');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM','Este download foi adicionado por: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE','Download salvo.');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDIT','Editar Download');
DEFINE('_JLIST_BACKEND_FILESEDIT_ADD','Adicionar Download');

//DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_LIST_DESC','Select file for downloading from the server.');
DEFINE('_JLIST_BACKEND_FILESEDIT_ROOT_DIR_TITLE','Diretório principal de (Envio)');

DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_1','Todos os subdiretórios são gravável!');
DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_2','Subdirectories <b>NÃO</b> gravável! Verifique as permissões no servidor (FTP: deverá estar CHMOD 777)');
DEFINE('_JLIST_BACKEND_FILESEDIT_CHECK_PERMISSIONS','Arquivo não pode ser enviado. Verifique as permissões no servidor (FTP: deverá estar CHMOD 777)');

// language
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE','Idioma');
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE_DEFAULT_LIST','Selecione:, Inglês, Alemão, Francês, Italiano, Espanhol, PortuguÊs, Russo, Polonês, Holandês');

// system
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM','Sistema');
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM_DEFAULT_LIST','Selecione:, Joomla 1.0, Joomla 1.5, Windows, Linux, MacIntosh');

DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSES_LIST','Selecionar Licença');
DEFINE('_JLIST_BACKEND_FILESEDIT_REMOVE_OK','Arquivo deletado.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_PUBL',' Download(s) publicado(s).');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_UNPUBL',' Download(s) despublicado(s).');

DEFINE('_JLIST_BACKEND_FILESEDIT_REQUIRES_INFO','Campos marcados <b><font color=red>*</font></b> devem ser preenchidos!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_TITLE','Títule <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION','Descrição');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_TEXT','Selecione símbolo do arquivo');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_PREVIEW','Visulizar');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_DESC','Item selecionado pode ser exibido ao longo de um espaço reservado.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT','Associação de Categoria <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSE','Licença');
DEFINE('_JLIST_BACKEND_FILESEDIT_RELEASE','Versão');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE','Tamanho');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE_DESC','Se não escolhido, o tamanho será definido automaticamente');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED','Data e hora');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED_DESC','Defina a data no formato: <b>YYYY-MM-DD H:mm:ss</b> ou use as funções de calendário. Quando omitido as data-hora corrente serão definadas automaticamente.');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE','Selecione o arquivo para enviar');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_DESC','Neste campo você pode definir um nome de arquivo para ser tranferido para o servidor. Este nome deverá ser usado para download.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_INFO','Nome atual do arquivo:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER','Um nome de arquivo definido:');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_NO','Nenhum nome de arquivo definido!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_LIST','Selecione o arquivo');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_REMOVE','<b>Deleta os arquivos assinalados do servidor</b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_HOME','Web site (com http:// )');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR','Nome do Autor');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL','URL do Autor ou endereço de e-mail');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL_DESC','Endereço de e-mail será ser criptografado automaticamente.');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD','Diretório de principal de envio');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_WRITABLE','Status: <font color=green><strong>GRAVÁVEL</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_NOTWRITABLE','Status: <font color=red><strong>NÃO GRAVÁVEL</strong></font>');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_WRITABLE','Status: <font color=green><strong>GRAVÁVEL</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_NOTWRITABLE','Status: <font color=red><strong>NÃO GRAVÁVEL</strong></font>');

//BACKEND LICENSE LIST
DEFINE('_JLIST_BACKEND_LICLIST_TITLE_HEAD','Licenças');
DEFINE('_JLIST_BACKEND_LICLIST_TITLE','Nome da licença');
DEFINE('_JLIST_BACKEND_LICLIST_LINK','Link');
DEFINE('_JLIST_BACKEND_LICLIST_DEL','Licença(s) deletada(s)');

//Backend LICENSE EDIT
DEFINE('_JLIST_BACKEND_LICEDIT_TITLE','Editar Licença');
DEFINE('_JLIST_BACKEND_LICEDIT_ERROR_TITLE','A licença deve ter um nome.');
DEFINE('_JLIST_BACKEND_LICEDIT_SAVE','Licença salva');
DEFINE('_JLIST_BACKEND_LICEDIT_TEXT','Nome da Licença');
DEFINE('_JLIST_BACKEND_LICEDIT_EDIT','Editar Licença');
DEFINE('_JLIST_BACKEND_LICEDIT_ADD','Adicionar licença');
DEFINE('_JLIST_BACKEND_LIC_USED','Esta licença está sendo editada por outro administrador.');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_TITLE','Nome da licença');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_URL','Link para a licença');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_DESCRIPTION','Descrição da licença');

//BACKEND TEMPLATES SUBMENU
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_NAME','Layout Administração');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_CATS','Categorias');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_FILES','Arquivos');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_SUMMARY','Sumário');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_EMAIL','E-Mails');
DEFINE('_JLIST_BACKEND_TEMPPANEL_TABTEXT_INFO','Informação');

// Backend TEMPLATES TEMPLATES TITLES
DEFINE('_JLIST_BACKEND_TEMPLIST_CATTITLE_HEAD','Layout de Categoria');
DEFINE('_JLIST_BACKEND_TEMPLIST_FILESTITLE_HEAD','Layouts de Arquivos');
DEFINE('_JLIST_BACKEND_TEMPLIST_SUMTITLE_HEAD','Layouts de Sumário');
DEFINE('_JLIST_BACKEND_TEMPLIST_MAILTITLE_HEAD','Layouts de E-Mail');

//BACKEND TEMPLATES LIST
DEFINE('_JLIST_BACKEND_TEMPLIST_MENU_TEXT_ACTIVE','Ativado');
DEFINE('_JLIST_BACKEND_TEMPLIST_TITLE','Nome do layout');
DEFINE('_JLIST_BACKEND_TEMPLIST_TYP','Tipo do layout');
DEFINE('_JLIST_BACKEND_TEMPLIST_ACTIVE','Ativo');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED','Layout padrão');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED_DESC','<b>Nota:</b> Layouts padrões são partes integrais do jDownloads e não podem ser deletados. <br />Na criação de um novo layout padrão os textos serão exibidos como padrão.');
DEFINE('_JLIST_BACKEND_TEMPLIST_DEL',' Layout(s) deletado(s)');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_LOCKED','Layout padrão não pode ser deletado..');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_ACTIVE','Layout ativo não pode ser deletado.');

//Backend TEMPLATES EDIT
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE','Editar Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ERROR_TITLE','Erro: Um layout deve ter um nome.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SAVE','Layout salvo');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ACTIVE','Layout ativado');
DEFINE('_JLIST_BACKEND_TEMPEDIT_EDIT','Editar Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ADD','Adicionar Layout');
DEFINE('_JLIST_BACKEND_TEMP_USED','Este layout está sendo editado por outro administrador.');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME','Nome');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP','Tipo');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT','Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_URL','Visualizar link');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION','Declare um nome significante para este layout.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP_DESCRIPTION','Selecione o tipo apropriado de layout.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT_DESCRIPTION','Este é o layout que será exibido da página frontal.');

//Backend TEMPLATES TYPS
DEFINE('_JLIST_BACKEND_TEMP_TYP1','Categorias');
DEFINE('_JLIST_BACKEND_TEMP_TYP2','Arquivos');
DEFINE('_JLIST_BACKEND_TEMP_TYP3','Sumario');
DEFINE('_JLIST_BACKEND_TEMP_TYP4','E-Mail');


//Backend Backup and Restore
DEFINE('_JLIST_BACKEND_RESTORE_TITLE_HEAD','Restaurar Backup');
DEFINE('_JLIST_BACKEND_RESTORE_FILE','Selecione um arquivo de backup');
DEFINE('_JLIST_BACKEND_RESTORE_RUN','Restaurar as permissões do banco de dados agora');
DEFINE('_JLIST_BACKEND_RESTORE_RUN_FINAL','Iniciar a restauração do backup?');
DEFINE('_JLIST_BACKEND_RESTORE_WARNING','Durante a restauração do backup, o banco de dados atual será substituído pelo banco de dados do backup.<br /><br />Isto não é uma garantia de que a restauração do backup ocorrerá sem problemas. Para adicionar segurança, é recomendado efetuar uma cópia do banco de dados via ftp-client. Se uma nova versão do jdownloads alterar as tabelas do banco de dados atual, uma restauração do jdownloads deverá criar uma nova estrutura de categorias. Por favor, espere o final da operação de restaração do banco de dados terminar antes de atualizar a página. No caso de uma grande estrutura de categoria e arquivos, o processo de restauração poderá demorar um certo tempo. Informações sobre a restauração podem ser encontadas no "Log de Restauração"');
DEFINE('_JLIST_BACKEND_RESTORE_MSG','%s A restauração foi executada com sucesso.');
DEFINE('_JLIST_BACKEND_RESTORE_MSG_2','Veja as informções da restauração no: "Log de Restauração".');

//Backend CSS & LANGUAGE EDIT
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE','Arquivo CSS');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE','Arquivo de idioma');
DEFINE('_JLIST_BACKEND_EDIT_CSS_FIELD_TITLE','Conteúdo do arquivo CSS');
DEFINE('_JLIST_BACKEND_EDIT_LANG_FIELD_TITLE','Conteúdo do arquivo de idioma');
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE_EDIT','Editar arquivo CSS');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE_EDIT','Editar arquivo de idioma');
DEFINE('_JLIST_BACKEND_EDIT_CSS_SAVED','Arquivo CSS salvo');
DEFINE('_JLIST_BACKEND_EDIT_LANG_SAVED','Arquivo de idioma salvo');
DEFINE('_JLIST_BACKEND_EDIT_LANG_WRITE_STATUS_TEXT','<big>O arquivo de idioma é: ');
DEFINE('_JLIST_BACKEND_EDIT_CSS_WRITE_STATUS_TEXT','<big>O arquivo CSS é: ');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_YES','<font color="green">gravável!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_NO','<font color="#990000">NÃO gravável!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_INFO','O arquivo deve ser gravável para poder salvar as novas configurções. Talves você tenha que mudar as permissões dele para CHMOD 777.');

// BACKEND OTHERS
DEFINE('_JLIST_FRONTEND_NOCAT','Nenhuma categoria disponível!');
DEFINE('_JLIST_FRONTEND_NOFILES','Nenhum arquivo disponível para esta categoria!');

// Information text
DEFINE('_JLIST_BACKEND_INFO_TEXT_TITLE','Informações do jDownloads');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TITLE','<b>Informações da licença:</b>');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TEXT','Este componente está publicado sob linceça <a href="http://www.gnu.de/documents/gpl.de.html" target="_blank">GNU/GPL licensing</a>.<br />Por instalar o jDownloads você aceita os termos de licença bem como as condições específicas abaixo. Se você não aceitar isso, você tem a obrigação de remover o componente novamente. <br /><br /><b>Condições adicionais:</b><br /><b>Não é permitido</b> remover o link do <b>componente na página principal</b>! O link adicional precisa estar visível. Se você deseja remover o link a qualquer por qualquer motivo, por favor, contacte-me: <a href="mailto:info@joomlaaddons.de">info@joomlaaddons.de</a>.<br /><br />Adicionalmente, este componente é disponível "como está" sem nenhuma expressão implicita de garantia! Responsabilidade nenhuma sobre dados perdidos, e etc. O componente usado está sobre a responsabilidade do instalador.<br /><b>Muito obrigado a todos os usuáriosque me ajudaram no desenvolvimento.');

DEFINE('_JLIST_BACKEND_INFO_LINK_BACK','Voltar');

///////////////////////////////////////////////////////////////////////////////
// Template defaults for _jdownloads_templates - Please do not change this !!!
// Vorgabewerte f&uuml;r Layouttabelle - hier bitte KEINE &Auml;nderungen vornehmen !!!
///////////////////////////////////////////////////////////////////////////////

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DEFAULT','{cat_title_begin}<div style="background-color:#EFEFEF; padding:6px;">{subcats_title_text}</div>{cat_title_end}
{cat_info_begin}<table width="100%" style="border-bottom: 1px solid #cccccc;">
<tr valign="top" border="0px">
<td width="75%" style="padding:5px;">{cat_pic}<b>{cat_title}</b></td>
<td width="15%" style="padding:5px; text-align:right">{sum_subcats}</td>
<td width="10%" style="padding:5px; text-align:right">{sum_files_cat}</td>
<tr valign="top" border="0px">
<td colspan="3" width="100%" style="padding:5px;">{cat_description}</td>
</tr>
</table>{cat_info_end}

<table border="0" cellspacing="2" cellpadding="5" width="100%" style=" background: #ffffff;">
{checkbox_top}
</table>
{files}
{form_hidden}
<div style="text-align:right">{form_button}</div>'); // changed in 1.4 beta (2)

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT','{files_title_begin}<div style="background-color:#EFEFEF; padding:6px;">
{files_title_text}</div>{files_title_end}

<table width="100%" border="0" cellpadding="5" cellspacing="5" style="background:#F8F8F8;border-bottom:1px solid #cccccc;">

        <tr valign="top">
            <td width="90%" valign="top"{file_pic} <b>{file_title}</b>
 {release} {pic_is_new}{pic_is_hot}{pic_is_updated}</td>
        </tr>
        <tr valign="top">
	    <td valign="top" class="jd_body" width"90%">{screenshot_begin}<a href="{screenshot}" rel="lightbox" > <img src="{thumbnail}" align="right" /></a>{screenshot_end}{description}</td>
        </tr>
        <tr>
            <td valign="top" width="10%" align="center"></td>
	</tr>
        <tr>
         <td style="background:#F5F5F5; padding:5px;" valign="top" width="90%"><small>{license_text} {author_text} {author_url_text} {created_date_value} {language_text} {system_text} {filesize_value} {hits_value}</small></td>
 	 <td valign="top" width="10%" align="center">
             {checkbox_list}
         </td>
       </tr>
</table>'); // changed in 1.4 beta (2)

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_SUMMARY_DEFAULT','<div class="jd_cat_title" style="padding:5px; font-size:10px; font-weight:normal;">{summary_pic} {title_text}</div>
<div valign="top" style="padding:5px;">
{download_liste}<br />
{license_note}
</div><br />
<div style="text-align:center">{download_link}</div>
<br /><div style="text-align:center">{external_download_info}</div>'); // changed in 1.4 beta (2)

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DEFAULT','Nota de Download!<br />
<br />
Os seguinte arquivos foram selecionados para o download:<br />
{file_list}
<br /><br />
Data e hora: {date_time}<br />
Nome: {user_name}<br />
Grupo de usuários: {user_group}<br />
IP do usuário: {ip_address}<br /><br />
Este e-mail é gerado automaticamente!');

//////////////////////////////////////////////////////////////////////////////////
// End template defaults for _jdownloads_templates
// Ende Vorgabewerte f&uuml;r Layouts
//////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////
// Licenses defaults for _jdownloads_license - Please do not change this !!!
// Vorgabewerte f&uuml;r Lizenzentabelle - hier bitte KEINE &Auml;nderungen vornehmen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_SETTINGS_LICENSE_TOTAL','7');

DEFINE('_JLIST_SETTINGS_LICENSE1_TITLE','GNU/GPL v.3');
DEFINE('_JLIST_SETTINGS_LICENSE1_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE1_URL','http://gpl3brasil.pbwiki.com/GPLv3');

DEFINE('_JLIST_SETTINGS_LICENSE2_TITLE','GNU/LGPL');
DEFINE('_JLIST_SETTINGS_LICENSE2_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE2_URL','http://www.fsfla.org/svnwiki/trad/LGPLv3');

DEFINE('_JLIST_SETTINGS_LICENSE3_TITLE','Donationware');
DEFINE('_JLIST_SETTINGS_LICENSE3_TEXT','The donation is needed for further development and/or software spreading.<br />Source: Wikipedia');
DEFINE('_JLIST_SETTINGS_LICENSE3_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE4_TITLE','Linkware');
DEFINE('_JLIST_SETTINGS_LICENSE4_TEXT','Linkware required a Link on the author\'s website during software usage.');
DEFINE('_JLIST_SETTINGS_LICENSE4_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE5_TITLE','Charityware');
DEFINE('_JLIST_SETTINGS_LICENSE5_TEXT','Charityware permits free use, the author asks for a donation for a good purpose.');
DEFINE('_JLIST_SETTINGS_LICENSE5_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE6_TITLE','Commercial license');
DEFINE('_JLIST_SETTINGS_LICENSE6_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE6_URL','');

DEFINE('_JLIST_SETTINGS_LICENSE7_TITLE','Creative Commons');
DEFINE('_JLIST_SETTINGS_LICENSE7_TEXT','');
DEFINE('_JLIST_SETTINGS_LICENSE7_URL','http://de.wikipedia.org/wiki/Creative_Commons#Standard-Lizenzen');

///////////////////////////////////////////////////////////////////////////////
// Install default config values - Please do not delete this !!!
// Installations Vorgabewerte f&uuml;r Konfigurationen - NICHT l&ouml;schen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_SETTINGS_INSTALL_1','<b>Selecione todos os arquivos:</b>');
DEFINE('_JLIST_SETTINGS_INSTALL_2','');
DEFINE('_JLIST_SETTINGS_INSTALL_3','Informação sobre os downloads');
DEFINE('_JLIST_SETTINGS_INSTALL_4','webmaster@yourwebsite.com');
DEFINE('_JLIST_SETTINGS_INSTALL_5','info@yourwebsite.com');


// ****************************************************************************
//		NEW IN VERSION 1.2 beta
// ****************************************************************************

// JAVASCRIPT (jdownloads.js) MESSAGES <<< Umlaute NICHT umwandeln !! >>>
DEFINE('_JLIST_JAVASCRIPT_TEXT_1','Por favor, selecione um outro arquivo na categoria antes de apertar o botão continue.');
DEFINE('_JLIST_JAVASCRIPT_TEXT_2','Não existe ainda nenhum arquivo para download nesta categoria.\\n');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TEXT_TO_SHORT','Pesquisar texto curto, por favor, insira no mínimo 3 caracteres!');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_OPTION','Você precisa escolher pelo menos uma opção de procura!');
// end javascript messages


DEFINE('_JLIST_INSTALL_1_2','Os dados já são existentes no banco de dados!');
DEFINE('_JLIST_INSTALL_2_2','Dados foram alterados, adicionados ou não existem (tradução ou contexto devem ser checados!)!');
DEFINE('_JLIST_INSTALL_17','Instalação do JoomFish encontrada! As definições jDownloads JoomFish foram adicionadas:');
//------------------------------------------
DEFINE('_JLIST_INSTALL_18','Os dados das definições do jDownloads JoomFish foram copiadas para:');
DEFINE('_JLIST_INSTALL_19','Se você quiser usar estas definições com JoomFish, use o instalador de Joomfish .');

DEFINE('_JLIST_FRONTEND_HOME_LINKTEXT','Resumo');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_CATLIST','Resumo');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_ONE_CAT','Categoria');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_DETAIL','Detalhes dos Downloads');

// PAGENAVIGATION FRONTEND
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_PAGE_TEXT','Página:');
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_TO_TEXT','de');

DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE','Preço');
DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE_DESC','Preço e moeda definida.');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_4','Restaurar Log');

//FRONTEND UPLOAD
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_REGGED','Você deve estar registrado para enviar arquivos. Se você já está registrado, por favor faça seu login primeiro. ');
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_SPECIALS','Você não tem autorização para enviar aquivos.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_CATS_EXIST','Erro: Arquivos somente podem ser enviados para uma categoria se ela estiver criada e publicada.');
DEFINE('_JLIST_FRONTEND_UPLOAD_LINKTEXT','Enviar arquivo');
DEFINE('_JLIST_FRONTEND_UPLOAD_PAGE_TITLE','Enviar arquivo');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME','Selecionar arquivo:');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_SEND','Enviar arquivo');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_CLEAR','Limpar Campos');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_FILETYPE','Extensões de arquivos permitidas');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_MAX_SIZE','Tamanho máximo permitido');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_VALUE','Erro: nem todos os campos estão preenchidos!<br />Por favor, preencha os campos requeridos.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILETYPE','Erro: extensão de arquivos selecionado não permitido!<br />Por favor, selecione somente arquivos com extensões permitidas.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILESIZE','Erro: tamanho do arquivo selecionado é maior do que o permitido!');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_MOVE_FILE','Erro: um erro ocorreu durante a transferencia do arquivo para o servidor!');
DEFINE('_JLIST_FRONTEND_UPLOAD_OK','O arquivo foi tranferido com sucesso ao servidor!<br />Publicação deve ser aprovada.');

// FRONTEND UPLOAD FIELD TITLE
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_NAME','Seu Name:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_MAIL','Seu E-Mail:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_TITLE_FILE','Título do Download:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_PRICE','Preço:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE','Descrição Curta:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE_LONG','Descrição Longa:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR','Autor:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR_URL','Autor Website:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LIZENZ','Licença:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_VERSION','Versão:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LISTBOXES','Selecione:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_CATEGORY','Categoria:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LANGUAGE','Idioma:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_SYSTEM','Sistema:');
DEFINE('_JLIST_FRONTEND_UPLOAD_SYMBOL_TEXT','Campo obrigatório');

//FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_LINKTEXT','Pesquisar Downloads');

// AUTOCHECK DOWNLOADS
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_CATS','novo diretório foi encontrado e adicionado como nova categoria!!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_CATS','Diretório de categoria não foi encontrado, consequentemente as novas categorias não foram publicadas!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_CATS','Nenhum novo diretório encontrado!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_CATS','Todas os diretórios de categorias existentes foram publicados!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TITLE','Última mensagem interna (ações executadas):');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TAB_TITLE','Última mensagem interna (acões) durante o monitoramento dos diretórios de Download');
DEFINE('_JLIST_BACKEND_AUTOCHECK_REFRESH_MESSAGE','Você pode atualizar a página para ver as modificações!');

DEFINE('_JLIST_BACKEND_RESTORE_LOG_TAB_TITLE','Resultados da última restauração de backup');

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_OFFLINE','O modo de manutenção está ativado! Entretanto a área de Download não está disponível neste momento para os visitantes normais! Esta área de download está disponível exclusivamente para os membros do grupo "autor".');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_HEADER','Status dos Downloads');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_OFF_DESC','O monitoramento automático do diretório de downloads está desativado!');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_VERSION_HEADER','Informação da versão atual do jDdownloads');

DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME','Tempo (em minutos) para a deleção dos arquivos temporários zip');
DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME_DESC','Indicar o valor em minutos, para a deleção de cada arquivos Zip criado por multiplos downloads. Se você oferecer arquivos grandes, você precisará de um valor alto. Valor padrão: 20 (minutos).');

DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD_UPLOAD','Configuração de envio da página frontal');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_ERROR','ERRO: Diretório principal de Download não pode ser renomeado!');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_OK',' - Diretório principal de Download renomeado com sucesso!');

DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO','Monitorar diretório de Download? ');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_DESC','Se esta opção for selecionada, todos os diretórios serão checados por modificções e base de dados automaticamente atualizados. Entretanto diretórios e arquivos carregados por FTP no servidor serão adicionados automaticamente como novos registros e como novos dados em categorias e tabelas de downloads. Se as categorias e Downloads não forem encontrados, então as entradas serão configuradas como: <b>Não publicado</b >.<b>Configuração padrão: SIM.</b>');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_CHECKBOX_INFO','<b>Nota:</b> Opções de caixa de seleção para Download serão definidas em administração de layout por arquivos de layout!');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_SYMBOLE_INFO','<b>Nota:</b> Opções de Mini símbolos serão exibidas no alyout da administração por arquivos de layout!');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE','Número de entradas por página');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE_DESC','Indicar aqui o número de entradas de Categorias/Downloads que serão exibidas pela página frontal.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_TITLE','Título a ser usado no cabeçalho');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_DESC','Definir aqui o título que deverá ser usado na página frontal como título do componente, ex.. "Downloads".');

// FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE','Ativação do envio na página frontal:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE_DESC','Se ativado, o grupo de usuários definidos abaixo poderão enviar arquivos com um formulário.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS','Quem pode enviar arquivos:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS_DESC','Aqui define cada grupo de usuário que pode enviar arquivos . A configuração "Especial" permite membros com status >= "autor" para acessar o formulário de envio.');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ALL','Todos');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_REGGED','Registrado');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ADMINS','Especial');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES','Extensões de arquivos permitidos:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES_DESC','Definir aqui uma extensão individual que deve ser enviada com o formulário de envio. Entre com cada valor separado por vírgula (,).');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE','Tamanho máximo em KB:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE_DESC','Definir aqui o tamanho máximo permitido para enviar arquivos em kilobytes (1024 Kb = 1 Mb). Valor pré-configurado: 2048.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT','Texto do formulário de envio:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_DESC','Definir aqui o layout (conteúdos e formatos) do formulário de envio (antes ou abaixo do texto do formulário). Os campos reservados: {form} deverão ser substituídos pelo atual formulário na saída da página frontal. Os símbolos dos campos reservados não podem ser deletados!');

// Platzhalter {form} NICHT ÄNDERN ODER LÖSCHEN !!!
// DO NOT DELETE, EDIT OR TRANSLATE: {form} !!! 

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_LAYOUT','Este formulário permite você enviar arquivos para o servidor. Todos os campos com símbolos são obrigatórios. Seu nome ou endereço de e-mail nunca deve será publicado para terceiros e será somente usado para informação interna.<br />
{form}<br />');

DEFINE('_JLIST_BACKEND_TEMPLIST_DEL_QUEST','Deletar Layout(s)?');
DEFINE('_JLIST_BACKEND_LICLIST_DEL_QUEST','Deletar Licença(s)?');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_STATUS_DESC','Aqui você pode ver o status da configuração do diretório principal de envio. Se isto não for editável, por favor, cheque as permissões de acesso com um programa FTP. As permissões devem estar em CHMOD 777.');

DEFINE('_JLIST_BACKEND_FILESEDIT_HITS','Número de Downloads passados');
DEFINE('_JLIST_BACKEND_FILESEDIT_HITS_DESC','Aqui o contador de Download pode ser mofificado ou resetado');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT_DESC','Você deve definir um Download à uma categoria. Selecione uma categoria apropriada na lista. Se outra categia for selecionada depois. então o arquivo de Download será automaticamente movido para o diretório da nova categoria.');

DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_KURZ','Descrição Curta');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_LONG','Descrição Longa');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDITOR_INFO','No formulário de configuração pode ser definido se o editor WYSIWYG ativado ou uma simples caixa de texto será usado para a edição.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_STATUS','Status: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_EMAIL','Endereço de E-Mail: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_TITLE','Erro: Download deve ter um Título!');
DEFINE('_JLIST_BACKEND_FILESEDIT_CATLIST_ERROR','Erro: nenhuma categoria definida!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_ERROR',' - Erro: Arquivo de Download não pode ser movido!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_OK',' - Arquivo de Download movido com sucesso!');

DEFINE('_JLIST_BE_NO_PUBL_FILES','Downloads sem categorias definidas não podem se publicados!');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_QUEST','Deletar Download(s)?');
DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION_SHORT','Descrição (Curta)');
DEFINE('_JLIST_BACKEND_FILESLIST_PIC','Símbolo');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION','<font color=#990000>Deletar arquivos de dados de ações de download:</font>');

DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION_TOOLTIP','Se SIM, dados de download não serão somente deletados mas também os arquivos associados pelo servidor! Se o arquivo não for deletado e o monitoramento dos diretórios de Download estiver ativado, então o arquivo será automaticamente considerado como um novo Download armazenado!<br /><b>Configuração recomendada: SIM</b >.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_OK',' - Arquivo(s) associados também deletados.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_ERROR',' - Arquivo(s) associados não deletados desde que perdidos.');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE_ID','ID');

DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_DEL_AFTER_COPY','Um erro ocorreu durante a operação de deleção do diretório de categorias antigas');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE','Título da categoria<b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE_DESC','Identificação da categoria. Para cada categoria um diretório será criado com o nome fornecido no título mas sem caraceteres especiais! Exceção: <b>" - _ . , " </b>e caracteres de espaço.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX','Categoria Principal');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX_NEW','Nova categoria principal');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE','Atribuição da Categoria');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE_NEW','Nova categoria criada em / como <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC_NEW','Se uma nova categoria está sendo criada então selecione "Categoria Principal". Se a nova categoria for uma subcategoria de uma categoria existente, então selecione categoria existente subordinada. Uma nova categoria será criada abaixo. A alocação de hierarquia pode ser moficada posteriormente.');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC','Se você quer mover uma categoria, então selecione uma categoria subordinada onde você queira mover a categoria atual. Se uma subcategoria servir no futuro como uma categoria principal então selecione a opção de "Categoria Principal".<br /><br /><b>Aviso:</b>
Na operação de salvar, o diretório atual será sobreposto automaticamente no servidor. Se sobrepor conteúdos de categorias em subcategorias , eles tambeÂ´m serão sobrepostos. Para efetuar as operções internar com segurança, TODAS as outras categorias atuais abaixo das modificções deverão estar travadas pela edição das categorias nesta hora!');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE','Categoria salva.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE_CHARS_NOT_ALLOWED','Erro: o título contém caracteres especiais proibidos!');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL_QUEST','Deletar Categoria(s)?');
DEFINE('_JLIST_BACKEND_CATSLIST_CATID','ID');
DEFINE('_JLIST_BACKEND_CATSLIST_PATH','Diretório');

// BACKEND CATS DELETE
DEFINE('_JLIST_BE_NO_DEL_SUBCATS_EXISTS','Categoria não pode ser deletada pela existencia de Subcategorias!');
DEFINE('_JLIST_BE_NO_DEL_FILES_EXISTS','Categoria não pode ser deletada por existir arquivos de Downloads!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_OK',' - Diretório deletado com sucesso!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_ERROR',' - Erro durante a operação de deleção de diretório!');

DEFINE('_JLIST_BACKEND_NO_SELECT_ACTION','Por favor, selecione primeiro uma linha de entrada.!');

DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_TITLE','Quantas linhas na lista serão exibidas');
DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_DESC','Aqui você pode definir quantas linhas serão exibidas na lista do layout da página de adminstração.');

DEFINE('_JLIST_UPLOAD_MAX_FILESIZE_INFO_TITLE','Tamanho máximo definido no arquivo de configuração php.ini:');

DEFINE('_JLIST_BACKEND_TEMPLATE_ACTIVE_ERROR','Somente UM layout pode ser slecionado para ativação!');
DEFINE('_JLIST_AUTO_FILE_CHECK_IMPORT_BY','Auto Importar');
DEFINE('_JLIST_AUTO_FILE_CHECK_ADDED',   'Download adicionados    ');
DEFINE('_JLIST_AUTO_FILE_CHECK_DISABLED','Download não encontrado      ');
DEFINE('_JLIST_AUTO_CAT_CHECK_ADDED',    'Categoria adicionada');
DEFINE('_JLIST_AUTO_CAT_CHECK_DISABLED', 'Categoria não encontrada  ');

// MESSAGES AFTER CHECK FILES AND DIRS WHEN UPDATED FROM 1.1 alpha
DEFINE('_JLIST_CHECK_CATS_TITEL1','Você tem que atualizar a versão velha do jDownloads para Versão 1.2');
DEFINE('_JLIST_CHECK_CATS_TITEL2','Como consequência, todas as categorias e Downloads existentes devem ser criadas agora devem ser tranferidas em nova estrutura de categorias!');

DEFINE('_JLIST_CHECK_FINISH','Processo terminado!');
DEFINE('_JLIST_CHECK_CATS_CREATE','Categorias-diretórios criados!');
DEFINE('_JLIST_CHECK_FILES_MOVE','Arquivo de Download sobreposto!!');
DEFINE('_JLIST_CHECK_FILES_NOT_FOUND','Arquivo de Download não encontrado!');
DEFINE('_JLIST_CHECK_FILES_NOT_MOVED','Arquivo de Download não pode ser sobreposto em diretório de categoria assinada!');
DEFINE('_JLIST_CHECK_CATS_NOT_FOUND','Categoria-diretórios não podem ser criados!');

// MESSAGES AFTER RESTORE BACKUPFILE
DEFINE('_JLIST_AFTER_RESTORE_TITLE_1','Processo de restauração rodando:');
DEFINE('_JLIST_AFTER_RESTORE_1','Dados restaurados!');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_2','Checagem do conteúdo do banco de dados iniciado:');
DEFINE('_JLIST_AFTER_RESTORE_3','Backup criado com uma antiga versão do jDownloads!');
DEFINE('_JLIST_AFTER_RESTORE_4','Os diretórios de categorias e Downloads estão sendo checados agora:');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_3','Detalhe dos resultados:');

DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST','ERRO: Diretório de envio principal não existe!');
DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST_2','Por favor, crie os 2 diretórios /downloads e /downloads/tempzipfiles no diretório principal do seu joomla usando um programa FTP e definas as permissões destes diretórios para CHMOD 0777 - caso contrário o jDownloads não irá funcionar!');
DEFINE('_JLIST_FRONTEND_HEADER_CATLIST_TITLE','Selecionar Categoria');
DEFINE('_JLIST_FRONTEND_HEADER_SUMMARY_TITLE','Sumário');
DEFINE('_JLIST_FRONTEND_HEADER_FINISH_TITLE','Download');

// FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_TITLE','Pesquisar Downloads');
DEFINE('_JLIST_FRONTEND_SEARCH_TEXT_TITLE','Pesquisar por');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_TITLE','Pesquisar um Título');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_DESC','Pesquisar em Descrições');
DEFINE('_JLIST_FRONTEND_SEARCH_INFO_TEXT','Um máximo de 20 arquivos podem ser exibidos como resultado da pesquisa.');
DEFINE('_JLIST_FRONTEND_SEARCH_BUTTON_TEXT','Pesquisar');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TITLE','Resultados da Pesquisa');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_SUM_FILES','encontrado');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_SUM_FILES','Nenhum arquivo encontrado como resultado da pesquisa.');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_SEARCH_TEXT','Pesquisar o termo');

// NEW LAYOUT FOR VIEW DOWNLOAD-DETAILS
DEFINE('_JLIST_BACKEND_TEMP_TYP5','Detalhes do Download');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_DETAILS','Detalhes do Download');
DEFINE('_JLIST_BACKEND_TEMPLIST_DETAILSTITLE_HEAD','Detalhes dos Layouts do Download');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS','Layout: Detalhes do Download');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DESC','Este é o layout dos Downloads <b>Página de detalhes</b> na página frontal.<br /><br />Não remover os campos reservados de variáveis <font color=red>{url_download}</font>!<br /><br />Variáveis disponíveis (campos reservados):<br />{file_title} {thumbnail} {pic_is_new} {pic_is_hot} {pic_is_updated} {url_download} {mirror_1} {mirror_2} {description_long} {details_block_title} {license_title} {license_text} {price_title} {price_value} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}.'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TITLE','<b>Informação sobre os detalhes do layout dos Downloads:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TEXT','<p>Exemplo gráfico da página frontal. A borda vermelha escura indica a área exibida que você pode modificar aqui.</p>');

// FRONTEND DOWNLOAD DETAILSITE
DEFINE('_JLIST_FE_DETAILS_PATHWAY_TEXT','Localização do arquivos');
DEFINE('_JLIST_FE_DETAILS_LINK_TEXT_TO_DETAILS','>> Detalhes');
DEFINE('_JLIST_FE_DETAILS_LICENSE_TITLE','Licença');
DEFINE('_JLIST_FE_DETAILS_PRICE_TITLE','Preço');
DEFINE('_JLIST_FE_DETAILS_LANGUAGE_TITLE','Linguagem');
DEFINE('_JLIST_FE_DETAILS_FILESIZE_TITLE','Tamanho');
DEFINE('_JLIST_FE_DETAILS_SYSTEM_TITLE','Sistema');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_TITLE','Autor');
DEFINE('_JLIST_FE_DETAILS_AUTHOR_URL_TITLE','Website');
DEFINE('_JLIST_FE_DETAILS_CREATED_DATE_TITLE','Criado');
DEFINE('_JLIST_FE_DETAILS_HITS_TITLE','Downloads');

// LAYOUT DOWNLOAD-DETAILS
///////////////////////////////////////////////////////////////////////////////
// Template defaults for _jdownloads_templates - Please do not change this and NO translation here!!!
// Vorgabewerte f&uuml;r Layouttabelle - hier bitte KEINE &Auml;nderungen oder Übersetzungen hier vornehmen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DEFAULT_NAME','Padrão 1.4');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NAME','Padrão 1.4');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DEFAULT_NAME','Padrão 1.4 - Informação Completa');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DEFAULT','<table width="100%" border="0" cellpadding="0" cellspacing="5">
    <tr>
    <td height="38" colspan="3" valign="top"><span style="font-size:13pt;">{file_pic} {file_title} {pic_is_new}{pic_is_hot}{pic_is_updated}</span></td>
  </tr>
  <tr>
    <td width="313" height="370" valign="top">{screenshot_begin}<a href="{screenshot}" rel="lightbox" > <img src="{thumbnail}" align="right" /></a>{screenshot_end} {description_long}</td>
    <td width="23" valign="top"></td>
    <td width="150" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-style:solid; border-width:thin; border-color:#CECECE; padding:5px;" bgcolor="#EFEFEF">
      <tr>
       <td height="25" colspan="2" valign="top">
        <p align="center" style="background-color:#CECECE; padding:2px;"><b>{details_block_title}</b></p>
        </td>
      </tr>
      <tr>
        <td height="20" valign="top">{filesize_title}</td>
          <td valign="top" style="text-align:right;">{filesize_value}</td>
      </tr>
      <tr>
        <td height="20" valign="top">{hits_title}</td>
          <td valign="top" style="text-align:right;">{hits_value}</td>
      </tr>
      <tr>
        <td height="20" valign="top">{language_title}</td>
          <td valign="top" style="text-align:right;">{language_text}</td>
      </tr>
      <tr>
        <td height="20" valign="top">{license_title}</td>
          <td valign="top" style="text-align:right;">{license_text}</td>
      </tr>
      <tr>
        <td height="20" valign="top">{author_title}</td>
          <td valign="top" style="text-align:right;">{author_text}</td>
      </tr>
      <tr>
        <td height="20" valign="top">{author_url_title}</td>
          <td valign="top" style="text-align:right;">{author_url_text}</td>
      </tr>
      <tr>
        <td height="20" valign="top">{price_title}</td>
          <td valign="top" style="text-align:right;">{price_value}</td>
      </tr>
      <tr>  
         <td height="20" valign="top">{created_date_title}</td>
          <td valign="top" style="text-align:right;">{created_date_value}</td>
      </tr>
      <tr>
        <td height="20" valign="top">{created_by_title}</td>
          <td valign="top" style="text-align:right;">{created_by_value}</td>
      </tr>
      <tr>
        <td height="20" valign="top">{modified_date_title}</td>
          <td valign="top" style="text-align:right;">{modified_date_value}</td>
      </tr>
      <tr>
        <td height="20" valign="top">{modified_by_title}</td>
          <td valign="top" style="text-align:right;">{modified_by_value}</td>
      </tr>
      <tr>
         <td height="103" colspan="2" align="center" valign="middle">
         <p align="center"><font size="2">{url_download}</font><br />{mirror_1} {mirror_2}</p></td>
      </tr>
       </table></td>
  </tr>
  <tr>
    <td height="0"></td>
    <td></td>
    <td></td>
  </tr>
  </table>'); // changed in 1.4 beta (2)

// NEW FILESLIST LAYOUT SIMPLE (FOR USE WITH DETAILS_LAYOUT)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_1_NAME','Layout padrão com caixas de seleção');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_1','{files_title_begin}<div style="background-color:#EFEFEF; padding:6px;">{files_title_text}</div>{files_title_end}

<table width="100%" style="padding:3px;" bgcolor="#F5F5F5">
   <tr>
   <td width="80%"> {file_pic} {file_title} {release} {pic_is_new}{pic_is_hot}{pic_is_updated}         
   </td>
        <td width="10%">
            <p align="center"> </p>
        </td>
        <td width="10%">
            <p align="center">{checkbox_list}</p>
        </td>
  </tr>
</table>
<table width="100%" style="padding:3px;">    
<tr>
        <td width="70%" align="left" valign="top" colspan="3">{screenshot_begin}<a href="{screenshot}" rel="lightbox"> <img src="{thumbnail}" align="right"/></a>{screenshot_end}{description}
        </td>
        <td width="10%" valign="top">{created_date_title}<br />{filesize_title}<br />{hits_title}</td>
        <td width="10%" valign="top">{created_date_value}<br />{filesize_value}<br />{hits_value}</td>
    </tr>
    <tr><td> </td></tr>
</table>'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE_NOT_ALLOWED_TO_CHANGE_DESK','Você não pode mudar nomes de layouts padrões!');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_2_NAME','Layout padrão sem caixas de seleçãos');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_2','{files_title_begin}<div style="background-color:#EFEFEF; padding:6px;">{files_title_text}</div>{files_title_end}

<table width="100%" style="padding:3px;" bgcolor="#F5F5F5">
   <tr>
   <td width="80%"> {file_pic} {file_title} {release} {pic_is_new}{pic_is_hot}{pic_is_updated}         
   </td>
        <td width="10%">
            <p align="center"> </p>
        </td>
        <td width="10%">
            <p align="center">{url_download}</p>
        </td>
  </tr>
</table>
<table width="100%" style="padding:3px;">    
<tr>
        <td width="70%" align="left" valign="top" colspan="3">{screenshot_begin}<a href="{screenshot}" rel="lightbox"> <img src="{thumbnail}" align="right"/></a>{screenshot_end}{description}
        </td>
        <td width="10%" valign="top">{created_date_title}<br />{filesize_title}<br />{hits_title}</td>
        <td width="10%" valign="top">{created_date_value}<br />{filesize_value}<br />{hits_value}</td>
    </tr>
    <tr><td></td></tr>
</table>'); // changed 1.4 beta (2)

// END LAYOUTS
// NEW LAYOUTS PARAMETER
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_TITLE','Notas do layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_DESC','Informação adicional para o layout pode ser definida aqui.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_TITLE','O layout usa caixas de seleção?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_DESC','Se sim, os descritivos das caixas de seleção e os botões Continue são exibidos na saída. Adicionalmente os símbolos dos campos reservados<b>{checkbox_list}</b> devem ser inseridos no layout. Se não, os símbolos dos campos reservados <b>{url_download}</b>devem ser inseridos no layout.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_TITLE','Inserir mini-símbolo?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_DESC','Se sim, o mini-símbolo designado deverá ser inserido. Os tamanhos dos símbolos podem ser ajustados nas configurações.');

DEFINE('_JLIST_FE_YES','SIM');
DEFINE('_JLIST_FE_NO','Não');

DEFINE('_JLIST_BACKEND_EDIT_PUBLISHED','Publicado');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_DATE','Últimas modificações');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_BY','por');
DEFINE('_JLIST_BACKEND_FILESEDIT_CREATED_BY','Criado por');

DEFINE('_JLIST_BACKEND_FILESEDIT_INFO_FIELDS_DESC','As caixas na esquerda, fornecem informações dos arquivos: nome do publicador, último editor, última hora de edição');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_ACTIVE','Exibir Lista de Categoria no cabeçalho?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_DESC','Se SIM, uma caixa de listagem com todas as categorias publicadas disponíveis para o usuário de acordo com as permissões do usuários será exibida no lado direito do cabeçalho. Por esta caixa de lisitagem, você pode ir diretamente para a Categoria/Subcategoria desejada.');

// SAMPLE DATA 
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_ROOT','Exemplo de Categoria');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_SUB','Subcategoria de exemplo');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_TEXT','Este é um exemplo de categoria para ilustração. Esta definição pode ser removida a qualquer hora.');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME','Download de exemplo');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME_TEXT','Este é um (arquivo) de exemplo para ilustração. Esta definição pode ser removida a qualquer hora.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_ERROR','Por haver um erro. dados de exemplo não foram criados! Por favor, cheque as opções no menu principal do jDownloads.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_OK','Dados de exemplo criados com sucesso!');
DEFINE('_JLIST_SAMPLE_DATA_BE_OPTION_LINK_TEXT','Instalar dados de exemplo agora');
DEFINE('_JLIST_SAMPLE_DATA_EXISTS','Dados de exemplo já existem!');
DEFINE('_JLIST_SAMPLE_DATA_BACK_TO_PANEL','Voltar ao Painel de Controle');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO2','<br /><b><u>Explicação dos Layouts</u></b><br /><b>Categorias: </b>Definir o layout das categorias dos itens desejados para download e para isso deve usar as caixas de seleção acima e abaixo de cada item da lista de Download.<br /><b>Arquivos: </b>Definir o layout da lista de Download exibida abaixo das categorias (ver aqui embaixo).<br /><b>Detalhes do Downloads: </b>Definir a visualização detalhada do layout de download.<br /><b>Sumário: </b>Definir o  layout do sumário da página de download (para cada inicio de download atual) com a lista de arquivos selecionados para fazer downloaded.<br /><b>E-Mails: </b>Definir o layout do E-Mail que será recebido após cada download pelo Administrador.');

// ANTI_LEECH_CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_TITLE','Protegendo seu Diretório de Download?');
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_DESK','Se SIM, o arquivo htaccess.txt deverá ser copiado em seu diretório raiz de download e renomeado para .htaccess. Agora, a proteção será ativada e todos os acessos externos aos arquivos estão bloqueados incluindo os subdiretórios. <b>Recommendado: SIM!</b>');
DEFINE('_JLIST_ACTIVE_ANTILEECH_ERROR',' - ERRO durante a cópia do arquivo htaccess.txt!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OK',' - Proteção de Download ativada!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_ERROR',' - Erro durante a exclusão do arquivo .htaccess!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_OK',' - Proteção de Download desativada!');

DEFINE('_JLIST_FRONTEND_ANTILEECH_MESSAGE','Acesso aos downloads não autorizado!');
DEFINE('_JLIST_FRONTEND_FILE_NOT_FOUND_MESSAGE','O arquivo recomendado não foi encontrado!<br /><br />Por favor, informe o Webmaster!');

DEFINE('_JLIST_FRONTEND_SUMMARY_ZIP_FILESIZE','Tamanho do arquivo para o pacote de Download');
DEFINE('_JLIST_FRONTEND_NEXT_SITE_BUTTON','&nbsp;>>&nbsp;');
DEFINE('_JLIST_FRONTEND_PREV_SITE_BUTTON','&nbsp;<<&nbsp;');

DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_CATS_TITLE','Número de Categorias');
DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_SUBCATS_TITLE','Número de Subcategorias');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CATLIST','Por favor. escolha uma categoria ou >Categoria Principal<');

// NEW OPTION FOR DIREKT DOWNLOAD LINK
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_TITLE','Ativar download direto?');
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_DESC','Se SIM: Durante o uso do campos reservados <b>{url_download}</b> no layout, o download irá iniciar imediatamente, sem visualizar o site do sumário.');

// NEW OPTION FOR HOT AND NEW IMAGES IN DOWNLOADS
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_TITLE','A partir de quando o download pode ser considerado "popular"');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_DESC','Indicar o número de downloads que o arquivo precisa ter para ser considerado "HOT". No final do título do download irá aparece um simbolo "HOT".');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_TITLE','Nome do arquivo do símbolo');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC','O arquivo indicado deve estar no diretório: <b>../components/com_jdownloads/images</b>.');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_TITLE','Quanto tempo o download será considerado como "novo"');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_DESC','Indicar o número de dias que o download será considerado como "NOVO". No final título do inicio do download irá exibir o símbolo "NOVO".');
// NEW OPTION FOR DOWNLOAD PIC BUTTON IN DOWNLOAD DETAILS
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_TITLE','Nome do símbolo de download');
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_DESC','O arquivo indicado deve estar no diretório <b>../components/com_jdownloads/images</b> e deve ser usado como link de download nos detalhes do site de download.');

// NEW IN 1.2 beta 2
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH','Publicação automática de Download:');
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH_DESC','Quando SIM, o arquivo de download será publicado após o envio.');

// NEW IN 1.2 stable
DEFINE('_JLIST_BACKEND_DIRSEDIT_CREATE_DIR_MESSAGE_ERROR','Erro: O Diretório não pode ser criado! Cheque via FTP se as permissões CHMOD 0777 foram dadas para todos os diretórios do jDownloads!');

// NEW IN 1.3 stable

// FOR CREATES MAIN MENU IN INSTALL
DEFINE('_JLIST_BACKEND_CPANEL_MAIN','Painel de Controle');
DEFINE('_JLIST_INSTALL_DEFAULT_DATE_FORMAT','%Y-%m-%d %H:%M:%S');

// NEW OPTION SORTORDER CATEGORIES
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_TEXT','Categorias ordem de classificação');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_DESC','Ordem pela qual as Categorias são classificados no front end. Selecione "Standard" para usar a ordem padrão no backend\'s.');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_1','Padrão');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_2','Nome ascendente');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_3','Nome descendente');

// NEW TAB TITLE FOR AUTODETECT
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_TAB_TITLE','Monitoramento');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_HEADER_TITLE','Monitorar as pastas de download');

// NEW OPTION AUTOPUBLISH NEW FOUNDED FILES
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_TITLE','Publicar downloads automaticamente?');
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_DESC','Se Sim, novos arquivos encontrados serão publicados imediatamente. Presume-se que você tenha esta opção ativada.<br /><b>Padrão: Não.</b>');

// NEW OPTION  FOR AUTODETECT ALL FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_TITLE','Monitorar todos os tipos de arquivos?');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_DESC','Se esta opção estiver ativada, todos os tipos de arquivos serão monitorados!');

// NEW OPTION  FOR AUTODETECT ONLY THIS FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_TITLE','Monitorar apenas as seguintes tipos de arquivos:');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_DESC','Se esta opção estiver ativada, apenas os tipos de arquivos mencionados serão monitorados! Valores devem ser separados por vígula (,).');

// NEW COPY DOWNLOADS FUNCTION
DEFINE('_JLIST_BACKEND_FILES_COPY_TITLE','Copiar Downloads');
DEFINE('_JLIST_BACKEND_FILES_COPY_DESC','Selecine a Categoria de Destino.');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_1','Estes Downloads são marcados para cópia:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_2','Dica: Se você selecionar a categoria própria, é criada a cópia como: "Copiar de <i>Tído do Download</i>"!');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_3','Publicar Downloads copiados:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_4','Copiar também o arquivo:');
DEFINE('_JLIST_BACKEND_FILES_COPY_DOWNLOADS_TEXT','Copiar de');
DEFINE('_JLIST_BACKEND_FILES_COPY_SAVED','Downloads foram copiados!');

// NEW OPTION EXTERN DOWNLOAD URL
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_TITLE','Link de arquivo externo:');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_INFO','Para um arquivo de link externo, você tem que deletar o arquivo local primeiramente.');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_DESC','Aqui você pode obter um arquivo externo para Download. Deixe então o campo para o upload de arquivo vazio.<br ><b>Nota Importante:</b> Se um link para uma servidor de hospedagem (p. ex. Rapidshare) que são, você pode ter o funcionamento de download não garantido. Teste antes se necessário. Também o tamanho do arquivo nem sempre pode ser determinado. Este deve então ser introduzidos manualmente.'); // changed in 1.3 RC2

//NEW OPTION FOR JCOMMENTS INTEGRATION
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_TITLE','Funções de Comentário de JComments?');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_DESC','Sim, ativar a função de comentários de <b>JComments</b> no frontend.<br /><b>JComments</b> não é incluído com jDownloads e você precisa instalar e configurar primeiramente.<br />Você pode efetuar download da extensão JComments em <a href="http://www.joomlatune.com">www.joomlatune.com.</a>');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_EXISTS_DESC','Sim, exbir as funções de JComments na página de detalhes de download<br /><b>JComments está instalado!</b>');

// NEW TAB FOR FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TAB_TITLE','Uploads');
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TITLE_HEAD','Formulário de configuração de envio via site (Frontend)');

// NEW DOWNLOAD FIELDS FOR DOWNLOAD MIRRORS
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_TITLE','Link alternativo de arquivo externo:');
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_DESC','Aqui você pode configurar um servidor alternativo para o download.<br />No Layouts ativado para Arquivos e/ou Detalhes de Download você tem que preencher os placeholders {mirror_1} {mirror_2}.');

//NEW TEXT FOR MIRRORS
DEFINE('_JLIST_FRONTEND_MIRROR_URL_TITLE_1','Alternativa 1');
DEFINE('_JLIST_FRONTEND_MIRROR_URL_TITLE_2','Alternativa 2');

//NEW FOR PLUGINS TAB
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_PLUGINS','Plugins');

//NEW FOR FILE PLUGIN
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILEPLUGIN_HEAD','Configuração de Plugin de Conteúdo (mos_jdownloads_file)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(c) por Pelma para jDownloads');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT','Layout padrão:');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT_DESC','Este layout é usado para exibir downloads no conteúdo, quando o plugin é <b>ativo</b> (veja acima).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_NOT_INSTALLED','O plugin de conteúdo mos_jdownloads_file que pode ser usado para exibir downloads de jDownloads nos artigos não é parte integrante do componente jDownloads e deve ser instalado separadamente. <br /><b>Status: O plugin de conteúdo não está instalado!</b><br />Você pode encontrar o plugin em <a href="http://demo.joomlaaddons.de/index.php?option=com_jdownloads&Itemid=69&task=viewcategoria&catid=9">www.JoomlaAddons.de</a>.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ONLINEPART','Parametros para plugin ativado');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEPART','Parametros para plugin desativado');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW','Exibir ícone NOVO');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW_DESC','Exibir (ou não) o ícone NEW em conteúdos.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT','Exibir ícone HOT');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT_DESC','Exibir (ou não) o ícone HOT em conteúdos.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN','Ativar Plugin');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN_DESC','Plugin Ativo. Este não é o mesmo que o parâmetro publicado no Joomla. Quando você desativar o plugin aqui, você pode informar os visitantes sobre isto. (Veja parametros acima)!');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED','Exibir mensagem quando plugin desativado');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED_DESC','Quando o plugin estiver desativado, você pode exibir uma mensagem no lugar do download. Veja parametros acima.<br \><b>Não</b>: Para mostrar nada.<br \><b>Layout padrão</b>: Exibe uma mensagem usando o layout padrão (veja acima).<br \><b>Layout Offline</b>: Exibe uma mensagem usando o layout offline (veja acima).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE','Exibir titulo original de download');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE_DESC','Sim: usar o título original de download (e seu ícone) em sua mensagem offline.  Não: substituir o título original de download pelo conteúdo do campo "Titulo substituto" acima.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE','Titulo substituto');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE_DESC','Título para exibir quando o plugin estiver desativado (depende de sua seleção acima).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC','Descrição substituta');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC_DESC','Quando o plugin está desativado, esta descrição será mostrada no lugar da descrição original do download.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT','Layout Offline (plugin desativado)');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_DESC','Use este layout para exibir uma mensagem offline quando o plugin estiver desativado.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT1','Não');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT2','Layout padrão');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT3','Layout Offline');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_OFFLINE_FILETITLE','Downloads estão desativados.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_DESCRIPTION','If you are allowed to download, please contact the webmaster.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_FILEUNKNOWN','Não é possível encontrar o download! ID=<b>{fileid}</b>');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_LAYOUTUNKNOWN','Não é possível encontrar o layout <b>{thelayout}</b>!');

// NEW OPTIONS FOR DEFAULT CAT ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC','Nenhuma imagem selecionada!');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_TITLE','Icone Padrão para Categorias:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_DESC','Um ícone pode ser selecionado aqui, será atribuído automaticamente em nova categoria. O tamanho armazenado é indicado acima.');

// NEW OPTIONS FOR DEFAULT FILE ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_TITLE','Ícone Padrão para Downloads:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_DESC','Um ícone pode ser selecionado aqui, que será atribuído automaticamente em novos downloads. O tamanho armazenado é indicado acima.');

// FOR MISSING NEW MINIPICS
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_PRICE','Preço');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_FILESIZE','Tamanho do arquivo');

// FOR DATAFIELDS IN  DOWNLOAD DETAILVIEW
DEFINE('_JLIST_FE_DETAILS_CREATED_BY_TITLE','Criado por');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_BY_TITLE','Modificado por');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_DATE_TITLE','Alterado para');

// FOR EXTERN FILES -  USER INFO IF CHECKBOXES ACTIVE
// PLEASE USE NOT SPECIAL CHARS e.g. " ' & ...
DEFINE('_JLIST_FRONTEND_EXTERN_FILE_USER_INFO','Este arquivo precisa ser feito o download separadamente, uma vez que está localizado em outro servidor. Por conseguinte, este arquivo pode não ser incluído em um dowload agrupado.');

// FOR SAMPLE PIC IN EMAIL LAYOUT 
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_EMAIL_INFO_TITLE','<b>Informação sobre o layout de e-mail</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_EMAIL_INFO_TEXT','<p>Este é um exemplo gráfico da informação do e-mail enviado. A borda vermelho escuro indica a área que você pode alterar a exibição. </p>');

// ******************************************************************************
// NEW IN 1.4 pre-release
// ******************************************************************************

// INSTALL - MOVE  IMAGES DIRECTORIES TO JOOMLA/IMAGES/JDOWNLOADS
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_ERROR','Problemas ao mover imagens de diretórios.');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_OK','imagens movidas para o diretório ../images/jdownloads/');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_DEST_DIR_EXIST','As imagens no diretório .. /imagens/jdownloads/ já existem!');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_COPY_ERROR','ERRO: Não foi possível copiar imagens do diretório!');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_DEL_AFTER_COPY_ERROR','ERRO: Não foi possível deletar imagens do diretório fonte depois de copiar!');

DEFINE('_JLIST_BACKEND_SETTINGS_IMAGES_NOTE','Nota: após a instalação de jDownloads, todas as imagens de utilizados serão movidas para o subdiretório Joomla: /imagens/jdownloads/. Quando você reinstalar jDownloads (atualizações por exemplo), todas as imagens não serão deletadas.');
// FOR MAIL AFTER FRONTEND UPLOADS

DEFINE('_JLIST_SETTINGS_INSTALL_6','Um novo arquivo foi enviado!');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_HEAD','configuração de e-mail para arquivos enviados');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE_TITLE','layout de e-mail');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE_DESC','Você pode fazer o download do <b>E-mail</ b> de aprensentação, que depois (se ativado) para cada upload será enviado para o endereço acima indicado. Pode ser código HTML e qualquer texto acrescentado. <br /> <br /> Wildcard disponível: <br />{name} {mail} {date} {ip} {file_title} {file_name} {description}');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_DOWNLOAD_TEMPLATE_DESC','Você pode fazer o download do <b>E-mail</ b> de aprensentação, que depois (se ativado) para cada download será enviado para o endereço acima indicado. Pode ser código HTML e qualquer texto acrescentado. <br /> <br /> Wildecard disponível:<br />{file_list} {ip_address} {date_time} {user_name} {user_group}');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE','Comunicado sobre um arquivo de apresentação!<br />
<br />
Remetente: {name}<br />
E-Mail: {mail}<br />
Endreço de IP: {ip}<br /><br />
Nome do Arquivo: {file_name}<br />
Titulo: {file_title}<br />
Descrição: {description}<br />
Data: {date}<br /><br />
Este e-mail foi gerado automaticamente.');

// NEW FOR "NEW" IMAGES
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC2','Lista de todas as imagens para o diretorio: <b>../images/jdownloads/newimages </b> para selecionar.');

// FOR NEW OPTIONS: SCREENSHOT UPLOAD
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_TITLE','Tamanho das miniaturas');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_INFO','Se imagens forem utilizadas nos downloads, após o envio da imagem, será gerado uma miniatura automaticamente. Tamanho das miniaturas pode ser definido. Nota: A condição para isto é, que tenha uma versão da biblioteca GD instalada no servidor (ver status).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_STATUS_GD_OK','Status: Biblioteca GD presente!');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_STATUS_GD_NOT_OK','Status: GD Library não instalada!');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_SIZE_HEIGHT','Altura maxima em pixels  (e.q.: 150).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_SIZE_WIDTH','Largura maxima em pixels (e.q.: 150).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_NEW_TITLE','Providenciar amazenamento de todas as miniaturas novamente? ');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_NEW_DESC','Deletar a configuração depois de armazenar todas as atualizações de miniaturas existentes e construir novas miniaturas com as dimensões acima indicadas.');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_MESSAGE','Todas as pre-visualização de novas imagens foram re-criada!!');

// NEW FIELDS IN EDIT FILES FOR SCREENSHOTS
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_NO_PIC','Nenhuma imagem selecionada');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_TITLE','Por favor, selecione a imagem no servidor:');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_DESC','Todas as miniaturas de imagens ficarão localizadas neste diretório para ser selecionada <b>/images/jdownloads/screenshots/thumbnails </b>. A imagem ativada pode ser indicada com o simbolo substituto {thumbnail} no layout.');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_UPLOAD_TITLE','Selecione uma imagem para enviar:');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_UPLOAD_DESC','Aqui você pode enviar uma imagem para o servidor. Isto é usado para download. O arquivo original ficará armazenado em <b>/images/jdownloads/screenshots</b> e a miniatura é gerada automaticamente.');

// FOR MIRROR LINK - JAVASCRIPT ERROR MESSAGE
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_ONLY_MIRROR','Erro: Por favor, selecione primeiro um arquivo interno ou externo. Link alternativo é possível apenas opcionalmente.');

// FOR NEW MIRROR DOWNLOAD BUTTONS
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_MIRROR_BUTTON_TITLE1','Primeiro Botão Alternativo');
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_MIRROR_BUTTON_TITLE2','Segundo Botão Alternativo');

// FOR NEW "UPDATED" ICON IN DOWNLOADS TITLE
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC3','Todos os arquivos estarão na pasta: <b>../images/jdownloads/updimages </b>para escolher.');
DEFINE('_JLIST_BACKEND_SETTINGS_UPD_TITLE','Quanto tempo um download deve ser considerado "atualizado"');
DEFINE('_JLIST_BACKEND_SETTINGS_UPD_DESC','Digite o número de dias que um download deve ser considerado como "atualizado". Estará atrás dos títulos de downloads, abaixo do ícone. Tal como um download é atualizado depois de cada alteração. "0" para nenhum ícone.');

// FOR NEW OPTION - LOAD FILE IN BROWSER - NOT DOWNLOAD
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES','Quais tipos de arquivo serão abertos no Browser ');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES_DESC','Indique os tipos de arquivo que não serão oferecidos para Download. Estes arquivos serão aberto em uma nova janela no browser. Defina a extensão separada por vírgula (,). Example: html,htm,txt,pdf,doc,jpg,jpeg,png,gif');

//NEW FRONTEND PIC UPLOAD FIELD
DEFINE('_JLIST_FRONTEND_UPLOAD_PIC_FILETITLE','Tela de exemplo:');
DEFINE('_JLIST_FRONTEND_UPLOAD_PIC_ALLOWED_FILES','Tipos de arquivo permitido:');

// NEW FILTER OPTION IN FILES LIST - BACKEND
DEFINE('_JLIST_BACKEND_FILESLIST_FILTER_PUBLISHED','Publicado');
DEFINE('_JLIST_BACKEND_FILESLIST_FILTER_UNPUBLISHED','Nao Publicado');

// NEW INFO WHEN USING LIGHTBOX PLACEHOLDER
DEFINE('_JLIST_BACKEND_TEMPEDIT_INFO_LIGHTBOX','Quando você vai usar a Lightbox com a funcao Screenshots, você deve definir o espaço reservado com essa sintaxe: a href="{screenshot}" rel="lightbox" > <img src="{thumbnail}" align="right" /></a>');  

// ******************************************************************************
// new in 1.4 beta
// ******************************************************************************

// NEW OPTION FOR MANAGER ACCESS IN BACKEND
DEFINE('_JLIST_BACKEND_SETTINGS_MANAGER_ACCESS','Acesso para gerentes?');
DEFINE('_JLIST_BACKEND_SETTINGS_MANAGER_ACCESS_DESC','Se setado como Sim, os membros do grupo Gerentes terao acesso a todas as funcoes da administracao do jDownloads. Se setado como Nao, somente os Administradores.');

// NEW OPTION FOR VIEW PLACEHOLDER IMAGE FOR SCREENSHOTS IN DETAIL SITE
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_TITLE','Exibir a aba Screenshot na pagina de detalhes?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_TEXT','Se definido como Sim, a imagem na esquerda é exibido na perspectiva detalhadamente, caso não seja atribuído a tela de download. ');


// NEW OPTION FOR VIEW PLACEHOLDER IMAGE FOR SCREENSHOTS IN FILESLIST
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_IN_LIST_TITLE','Exibir a aba screenshots na lista de downloads?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_IN_LIST_TEXT','Se definido como Sim, a imagem na esquerda é exibida na tela não se importar listas é atribuída ao download. ');


// NEW OPTION FOR VIEW CATEGORY INFOS IN LISTVIEW - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_CAT_VIEW_INFO_IN_LISTS_TITLE','Exibir informacaoes das categorias?');
DEFINE('_JLIST_BACKEND_SETTINGS_CAT_VIEW_INFO_IN_LISTS_TEXT','Se definido como Sim, a categoria informação é mostrada novamente sob a barra de navegação. Tal como o nome da categoria já é visível na navigationbar, isto não é bem-vinda. ');


// NEW OPTION FOR VIEW PAGE NAVIGATION ON THE BOTTOM - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_BOTTOM_TITLE','Exibir a navegacao de paginas na parte de baixo da pagina?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_BOTTOM_TEXT','Se definido como Sim, uma página é exibida na barra de navegação na parte inferior da página. ');


// NEW OPTION FOR VIEW PAGE NAVIGATION ON THE TOP - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_TOP_TITLE','Exibir a navegacao de paginas na parte de cima da pagina?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_TOP_TEXT','Se definido como Sim, uma página é exibida na barra de navegação no topo da página. ');


// PUBLISH FILES MESSAGE IN BACKEND
DEFINE('_JLIST_BACKEND_EDIT_FILES_CAN_NOT_PUBLISH_INFO','Como alguns downloads não tinham qualquer arquivo sessão, a publicação não sera possível!');

DEFINE('_JLIST_BACKEND_EDIT_FILES_SET_UPDATE_TITLE','Marcar download como atualizado:');
DEFINE('_JLIST_BACKEND_EDIT_FILES_SET_UPDATE_TEXT','Se definido como Sim, o download é marcado como atualizado no frontend. A duração do estado atualizado pode ser definida na configuração.');

// FOR NEW META INFORMATION FIELDS IN CAT AND FILES EDIT
DEFINE('_JLIST_BACKEND_EDIT_METADESC_TITLE','Meta descricao:');
DEFINE('_JLIST_BACKEND_EDIT_METADESC_DESC','Aqui você pode opcionalmente meta fixada uma curta descrição para a descrição de meta-campo. Este será inserido no HTML-output '.);

DEFINE('_JLIST_BACKEND_EDIT_METAKEY_TITLE','Meta palavras-chave:');
DEFINE('_JLIST_BACKEND_EDIT_METAKEY_DESC','Aqui você pode opcionalmente definir algumas palavras-chave para o meta-campo palavras-chave. Estes serão inseridos no formato de HTML. ');


DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_INFOS_TITLE','Informacoes sobre o autor deste arquivo');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_HOME_DESC','URL para a pagina do autor. Isto devera ser exibido na pagina principal como link.');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_DESC','Aqui você pode digitar um nome e um endereço na web ou inferior a um e-mail. No frontend você quer ver um link para uma página web ou e-mail um link. ');

// NEW PARAMETER IN SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_NUMBERS','Numero de resultados da pesquisa');

// NEW USER INFO BY EXTERN SHAREHOSTER LINK
DEFINE('_JLIST_FRONTEND_DOWNLOAD_GO_TO_OTHER_SITE_INFO','O arquivo requisitado esta localizado em uma pagina externa. <br />Por favor, siga as instrucoes para iniciar o download.');

// NEW OPTION IN  EDIT DOWNLOADS
DEFINE('_JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_TITLE','Arquivo em uma pagina externa');
DEFINE('_JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_DESC','Se definido como sim, o arquivo está localizado em uma página externa. (Ex. Sharehoster) eo download só pode ser iniciada no exterior página. Um clique sobre o download começa esta página no browser. ');


// NEW SERVER INFO TAB IN CPANEL TAB
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_5','Informacao do Servidor');
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_TITLE','Informacao sobre a configuracao atual do servidor'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_DESC','O tamanho máximo dos arquivos depende da configuração atual do servidor (php.ini). Abaixo você pode ver os valores atuais relevantes para uploads. Certifique-se que os valores são fixados alto o suficiente. Se você don 't têm acesso ao php.ini, contacte o seu alojamento. Você pode encontrar informações sobre os parâmetros em www.php.net.'); 

DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_FILE_UPLOADS','Envio de arquivos permitido:'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_FILESIZE','Tamanho de arquivo maximo permitido (max_filesize):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_POST_MAX_SIZE','Tamanho maximo permitido de POST: (post_max_size):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MEMORY_LIMIT','Limite de memoria (memory_limit):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_EXECUTION_TIME','Tempo maximo de execucao de scripts (max_execution_time):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_INPUT_TIME','Tempo maximo de upload (max_input_time):'); 

// NEW MESSAGE AFTER EDIT CATEGORIES AND CHANGING THE ACCESS LEVEL
DEFINE('_JLIST_BACKEND_CATSEDIT_SUM_CATS_ACCESS_LEVEL_CHANGED_AFTER_EDIT_MSG','Subcategorias devem ser setadas com as mesmas permissoes de acesso!');
DEFINE('_JLIST_BACKEND_CATSEDIT_CATS_ACCESS_LEVEL_CAN_NOT_CHANGED_MSG','Nota: Uma categoria nao pode ter um nivel de acesso menor do que uma categoria de nível superior. Nível de acesso foi redefinido.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CATS_ACCESS_LEVEL_CAN_NOT_CHANGED_MSG','Informações: Subcategorias não pode ter mais baixos do que os seus direitos imediatos mãe categoria. Portanto, os direitos de acesso foram redefinidas. ');


// NEW MINI ICON TITLE
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD_HITS','Downloads');
// ADDITIONAL INFO IN FILES LAYOUT
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC2','Use the placeholders {files_title_begin} {files_title_text} {files_title_end} to insert a title above the filelist.'); // changed in 1.4 beta (2) 
// ADDITIONAL INFO IN CAT LAYOUT
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC2','Use os campos reservados {cat_title_begin} {subcats_title_text} {cat_title_end} para inserir um titulo acima da subcategoria.'); // changed in 1.4 beta (2) 
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC3','Os campos reservados {cat_info_begin} and {cat_info_end} marcam as zonas onde as informacoes sobre as categorias serao exibidas. Estas zonas podem ser marcadas com os parametros de configuracao.'); 

// NEW MESSAGES FOR INSTALLATION
DEFINE('_JLIST_INSTALL_20','Por afvor, aguarde - Checando permissoes das categorias...');
DEFINE('_JLIST_INSTALL_21','Check de categorias foi finalizado.');

// NEW IN 1.4 beta (2)

// NEW TEXT FOR LAYOUT FIELDS TITLE PLACEHOLDERS IN THE FRONTEND VIEW  (layout: files)
DEFINE('_JLIST_FE_FILELIST_LICENSE_TITLE','Licenca');
DEFINE('_JLIST_FE_FILELIST_PRICE_TITLE','Preco');
DEFINE('_JLIST_FE_FILELIST_LANGUAGE_TITLE','Language');
DEFINE('_JLIST_FE_FILELIST_FILESIZE_TITLE','Filesize');
DEFINE('_JLIST_FE_FILELIST_SYSTEM_TITLE','Sistema');
DEFINE('_JLIST_FE_FILELIST_AUTHOR_TITLE','Autor');
DEFINE('_JLIST_FE_FILELIST_AUTHOR_URL_TITLE','Website');
DEFINE('_JLIST_FE_FILELIST_CREATED_DATE_TITLE','Data');
DEFINE('_JLIST_FE_FILELIST_HITS_TITLE','Hits');
DEFINE('_JLIST_FE_FILELIST_CREATED_BY_TITLE','Criado por');
DEFINE('_JLIST_FE_FILELIST_MODIFIED_BY_TITLE','Modificado por');
DEFINE('_JLIST_FE_FILELIST_MODIFIED_DATE_TITLE','Ultima alteracao');
// NEW FOR PLACEHOLDER   {files_title_text} e  {subcats_title_text}  {details_block_title}
DEFINE('_JLIST_FE_FILELIST_TITLE_OVER_FILES_LIST','Arquivos:');
DEFINE('_JLIST_FE_FILELIST_TITLE_OVER_SUBCATS_LIST','Subcategorias:');
DEFINE('_JLIST_FE_DETAILS_DATA_BLOCK_TITLE','Data');
// NEW PLACEHOLDERS FOR SUMMARY PAGE  {license_note}  {title_text}
DEFINE('_JLIST_FE_SUMMARY_PAGE_LICENSE_NOTE','With the download, you acknowledge the license conditions.');
DEFINE('_JLIST_FE_SUMMARY_PAGE_TITLE_TEXT','Aqui voce visualizara os arquivos selecionados para o download');

// NEW INSTALL MESSAGES FOR UPDATE
DEFINE('_JLIST_INSTALL_WARNING_CAT_ACCESS_RIGHTS','Houve algumas mudanças nas categorias configurações de segurança. Portanto verifique suas categorias, antes da publicação!');
DEFINE('_JLIST_INSTALL_WARNING_DEFAULT_LAYOUTS_ARE_ACTIVE','Devido à introdução de um novo conjunto de espaços reservados ao novo layout padrão 1.4 foi activada. Você pode mudar o esquema nas configuracaos do layout.');

?>
