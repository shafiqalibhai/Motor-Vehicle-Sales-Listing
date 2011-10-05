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

DEFINE('_JLIST_INSTALL_0','Informa��o de Instala��o:');
DEFINE('_JLIST_INSTALL_1','Todos os arquivos de configura��o existem no banco de dados!');
DEFINE('_JLIST_INSTALL_2','Arquivos de configura��o atualizados.');
DEFINE('_JLIST_INSTALL_3','Todos os layouts padr�es existem no banco de dados!');
DEFINE('_JLIST_INSTALL_4','Layouts padr�es salvos no banco de dados!');
DEFINE('_JLIST_INSTALL_5','Todas as licen�as padr�es existem no banco de dados!');
DEFINE('_JLIST_INSTALL_6','Licen�a(s) padr�o(�es) salva(s) no banco de dados!');
DEFINE('_JLIST_INSTALL_7','O diret�rio de envio existe e est� grav�vel!');
DEFINE('_JLIST_INSTALL_8','O diret�rio de envio existe e est� N�O � grav�vel. Altere as permiss�es CHMOD para 777 para enviar para o diret�rio, sen�o o jDownloads n�o ir� funcionar!');
DEFINE('_JLIST_INSTALL_9','Diret�rio de envio criado. Deve ser configurado CHMOD 777.');
DEFINE('_JLIST_INSTALL_10','Erro: N�o foi poss�vel criar o diret�rio de envio!<br />Crie-o via FTP e configure as permiss�es CHMOD em 777 para enviar os arquivos ao diret�rio, sen�o o jDownloads n�o ir� funcionar!');
DEFINE('_JLIST_INSTALL_11','O diret�rio tempor�rio para .zip existe e � grav�vel!');
DEFINE('_JLIST_INSTALL_12','Os diret�rios /downloads/tempzipfiles existem mas n�o est�o grav�veis. Altere as permiss�es CHMOD para 777 do diret�rio temp, sen�o o jDownloads n�o ir� funcionar!');
DEFINE('_JLIST_INSTALL_13','Diret�rios /downloads/tempzipfiles criados. Permiss�es: CHMOD 777 - OK.');
DEFINE('_JLIST_INSTALL_14','Erro: Diret�rio .zip /downloads/tempzipfiles n�o foim criado!<br />Crie-os via FTP e configure as permiss�es CHMOD em 777 para enviar os arquivos ao diret�rio.<br />Sen�o o jDownloads n�o ir� funcionar!');
DEFINE('_JLIST_INSTALL_15','Instala��o conclu�da com sucesso!');
DEFINE('_JLIST_INSTALL_16','Iniciar jDownloads!');

DEFINE('_JLIST_INSTALL_DB_TIP','Nota: Se voc� desistalar o jDownloads o banco de dados n�o ser� deletado. Ent�o se voc� usar uma nova vers�o, o banco de dados poder� ser reaproveitado.');
DEFINE('_JLIST_INSTALL_TITLE_FOR_DEFAULT_LAYOUTS','Padr�o');

//FRONTEND

DEFINE('_JLIST_FILE_NOT_FOUND','O arquivo requisitado n�o existe. Por favor, informe o webmaster..');
DEFINE('_JLIST_LINKTEXT_VIEW_FILE_TYPES','Iniciar download<br />(Exibir em uma nova janela)');
DEFINE('_JLIST_LINKTEXT_ZIP','Iniciar download');
DEFINE('_JLIST_LINKTEXT_DOWNLOAD_URL','Download');
DEFINE('_JLIST_LINKTEXT_HOME','Painel de Controle');
DEFINE('_JLIST_DEL_ZIP_ADMIN_INFO','<br />Informa��o do Admin: ocorreu um erro durante a exclus�o de arquivos tempor�rios zip ou eles n�o existem!');
DEFINE('_JLIST_FORM_BUTTON_TEXT','Continuar');
DEFINE('_JLIST_EMPTY_CAT_TEXT','Esta categoria n�o cont�m nenhum arquivo.<br /><br />');
DEFINE('_JLIST_MAIL_DOWNLOADER_NAME_VISITOR','Visitante');
DEFINE('_JLIST_MAIL_DOWNLOADER_GROUP','Convidado');
DEFINE('_JLIST_MAILSEND_ERROR','Ocorreu um erro ao enviar este e-mail!');
DEFINE('_JLIST_FRONTEND_COUNT_SUBCATS','Subcategorias:');
DEFINE('_JLIST_FRONTEND_COUNT_FILES','N�mero de arquivos:');
DEFINE('_JLIST_FRONTEND_HOMEPAGE','Inicio');
DEFINE('_JLIST_FRONTEND_BACK_BUTTON','Voltar');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DATE','Data');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LICENCE','Licen�a');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_AUTHOR','Autor');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_WEBSITE','Website');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_SYSTEM','Sistema');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_LANGUAGE','Idioma');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_DOWNLOAD','Download');
DEFINE('_JLIST_FRONTEND_VERSION_TITLE','Vers�o: ');
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
DEFINE('_JLIST_BACKEND_CPANEL_LICENSE','Licen�as');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES','Layouts da Administra��o');
DEFINE('_JLIST_BACKEND_CPANEL_BACKUP','Cria��o de Backup');
DEFINE('_JLIST_BACKEND_CPANEL_SETTINGS','Configura��o');
DEFINE('_JLIST_BACKEND_CPANEL_RESTORE','Restaura��o de Backup');
DEFINE('_JLIST_BACKEND_CPANEL_INFO','Termos de uso');
DEFINE('_JLIST_BACKEND_CPANEL_SUPPORT','Suporte');

// RESULTS FROM AUTOCHECKFILES OPTION
DEFINE('_JLIST_BACKEND_AUTOCHECK_TITLE','Informa��oes sobre a verifica��o da �rea de Download:');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_FILES','Novo(s) arquivo(s) encontrados e adicionados � base de downloads');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_FILES','Arquivo(s) n�o encontrados. A �rea de downloads n�o est� dispon�vel para o p�blico em geral!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_FILES','Nenhum arquivo novo encontrado!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_FILES','Todos os downloads publicados existem!');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_STATUS','Status');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_2','Vers�o');
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_3','Log de A��es');

// STATUS
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE_HEADER','Status da �rea de Download');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_TITEL','<font color="#990000"><b><big>Status da �rea de Download:</big></b></font>');

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_ONLINE','Se ONLINE, a �rea de download est� dispon�vel para visitantes.');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_ONLINE','<font color="green"><b><big> ONLINE!</big></b></font>');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_OFFLINE','<font color="red"><b><big> OFFLINE!</big></b></font>');

// OFFLINE
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_TITLE','Ativar manuten��o?');
DEFINE('_JLIST_BACKEND_OFFLINE_OPTION_DESC','Quando voc� clicar nesta op��o, a �rea de downloads estar� "off". Visitantes dever�o ver o texto exibido abaixo. Somente membros logados com o perfil de "autor" poder�o visualizar a �rea de download.');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_TITLE','Aviso aos visitantes');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DEFAULT','<table width="70%" align="center" cellspacing="0" cellpadding="20" border="1"><tr><td align="center">
<h3>Neste momento, est�o trabalhano na �rea de downloads.<br /><br />Por favor, tente novamente em alguns minutos.</h3><br /><img src="components/com_jdownloads/images/offline.png" />
</td></tr></table>');
DEFINE('_JLIST_BACKEND_OFFLINE_MESSAGE_DESC','Insira o texto que dever� ser exibido na �rea de downloads enquanto estiver em manuten��o.');
DEFINE('_JLIST_BACKEND_OFFLINE_ADMIN_MESSAGE_TEXT','<p align="center"><b><big>A �rea de downloads est�: OFFLINE!</big></b></p>'); // changed in 1.3 RC2

//BACKEND SETTINGS
DEFINE('_JLIST_BACKEND_SETTINGS','Configura��o');
DEFINE('_JLIST_BACKEND_SETTINGS_SAVED','Configura��es salvas');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_HEAD','Configura��o de E-mail para downloads'); // changed in 1.3 rc2
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILES_HEAD','Configura��o de Download');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD','Configura��o do Site');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_BACKEND_HEAD','Configura��o da Administra��o');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_SECURITY_HEAD','Defini��es de Seguran�a');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_IMAGES_HEAD','Defini��es de Imagens/�cones');

DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_DOWNLOADS','Downloads');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_FRONTEND','Site');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_BACKEND','Administra��o');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_IMAGES','Imagens');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SECURITY','Seguran�a');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_EMAIL','E-Mail');
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_SONSTIGE','Outros');

DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME','Formato da Data-Hora');
DEFINE('_JLIST_BACKEND_SETTINGS_DATETIME_DESC','Informa��es sobre o formato: <a href="http://www.php.net/manual/de/function.strftime.php" target="_blank">www.php.net</a>');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR','Diret�rio de Upload');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_DESC','Diret�rio Principal para os arquivos enviados. Este diret�rio e <b>todos</b> os subdiret�rios devem estar grav�veis!');

DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP','Diret�rio Tempor�rio');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIRTEMP_DESC','Este diret�rio existe e est� edit�vel! Ele cont�m os arquivos .zip criados temporariamente (ap�s o download, ser� automaticamente deletado).');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_1','Padr�o');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_2','Novos primeiro');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_3','Novos por �ltimo');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_4','Nome crescente');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_ORDER_5','Nome decrescente');

// E-Mail config
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION_DESC','Se isto estiver ativo, um e-mail ser� enviado para o endere�o abaixo ap�s o t�rmino de todos os downloads.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_OPTION','Ativar e-mail?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_DESC','Endere�o de e-mail para enviar informa��es de download.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO','Endere�o de e-mail');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML_DESC','e esta op��o for ativada, e-mails ser�o enviados no formato HTML. Se n�o, texto puro ser� usado.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_HTML','Usar formata��o-HTML?');

DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF_DESC','Texto do assunto usado no e-mail.');
DEFINE('_JLIST_BACKEND_SETTINGS_SEND_MAILTO_BETREFF','Assunto');

// View Frontend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_HEAD','Op��es do componente da p�gina de principal');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT','Descri��o do componente');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_COMPO_TEXT_DESC','Texto exibido <b>entre</b> o t�tulo do componente e estas categorias. O t�tulo do componente ser� automaticamente derivado do nome do menu.<br /><br />Classes, c�digo HTML e textos arbitr�rios podem ser inclu�dos.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT','Texto do caixa de sele��o');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CHECKBOX_TEXT_DESC','Nota a ser exibida pela caixa de sele��o do topo da lista.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_TEXT','Ordem de classifica��o');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTFILESORDER_DESC','Ordem em que cada arquivo ser� exibido na p�gina principal. Selecionar "Padr�o" para usar a ordem padr�o da administra��o.');

// View Images settings
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS','Exibir s�mbolos de informa��o?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SHOW_MINIPICS_DESC','Se ativado, o s�mbolo ser� exibido. Se desativado, um texto simples ser� exibido.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE','Tamanho em pixel do s�mbolo de informa��es');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_MINIPICS_SIZE_DESC','Tamanho do s�mbolo de informa��o exibido. Padr�o: 20');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE','Tamanho em pixel do s�mbolo da categoria');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATPICS_SIZE_DESC','Tamanho do s�mbolo da categoria exibida. Voc� pode usar seus �cones, somente enviando-os por FTP no subdiretorio: /catimages. Padr�o: 48');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE','Tamanho em pixel do simbolo de arquivo');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILEPICS_SIZE_DESC','Tamanho exibido para o(s) arquido(S) de s�mbolo(s). Voc� pode usar seus �cones, somente enviando-os por FTP no subdiretorio: /fileimages. Padr�o: 32');

// View backend security settings
// to be translated
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_DESC','Se SIM, o endere�o de email n�o ser� exibido em texto puro a fim de evitar Spambots. Lembrando que se o javascript estiver desabilitado no seu browser, o link n�o ser� exibido. Configura��o recomendada: SIM.');
//
DEFINE('_JLIST_BACKEND_SETTINGS_MAIL_SECURITY_TITEL','Cancelando endere�o de e-mail?');

// View backend Config settings
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS','Usar WYSIWYG-editor para layouts');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LAYOUTS_DESC','Se esta op��o estiver ativada, o editor atual WYSIWYG selecionado ser� usado para editar layouts. Se n�o, um texto simples ser� exibido.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES','Usar WYSIWYG-editor para downloads');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_FILES_DESC','Se esta op��o estiver ativada, o editor atual WYSIWYG selecionado ser� usado para editar downloads. Se n�o, um texto simples ser� exibido.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS','Usar WYSIWYG-editor para categorias');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_CATS_DESC','Se esta op��o estiver ativada, o editor atual WYSIWYG selecionado ser� usado para editar categorias. Se n�o, um texto simples ser� exibido.');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES','Usar WYSIWYG-editor para licen�as');
DEFINE('_JLIST_BACKEND_SETTINGS_EDITOR_LICENSES_DESC','Se esta op��o estiver ativada, o editor atual WYSIWYG selecionado ser� usado para editar licen�as. Se n�o, um texto simples ser� exibido.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST','Selecionar campos de downloads: editar "Sistema"');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_SYSTEM_LIST_DESC','Aqui voc� pode editar as op��es propostas para o campo. Entre cada op��o voc� precisa colocar "," como separador. <br /><br /><b>Aviso importante:</b> se voc� j� tiver salvo alguns downloads na lista, � preciso ter cuidado, porque cada mudan�a � passada para o download. Exemplo: se alguns downloads forem salvos como sistema ="Joomla 1.5", eles dever�o ser salvos com outro valor ex. "Windows Vista". Adicionar novos valores no final da lista.');

DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST','Selecionar campos de downloads: editar "Idioma"');
DEFINE('_JLIST_BACKEND_SETTINGS_FILE_LANGUAGE_LIST_DESC','Aqui voc� pode editar as op��es propostas para o campo. Entre cada op��o voc� precisa colocar "," como separador. <br /><br /><b>Aviso importante:</b> se voc� j� tiver salvo alguns downloads na lista, � preciso ter cuidado, porque cada mudan�a � passada para o download. Exemplo: Os downloads salvos com a linguagem ="Alem�o", eles devem ser setados com outro valor ex. "Franc�s". Adicionar novos valores no final da lista.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_TEXT','Prefixo de titulo padr�o para arquivos ZIP');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_ZIPFILE_PREFIX_DESC','Se s�o selecionados arquivos m�ltipolos para download, eles s�o arquivados automaticamente  em um arquivo ZIP tempor�ria e apresentados ao usu�rio como um �nico arquivo para download. O nome do(s) arquivo(s) ZIP � criado do texto especificado � esquerda (prefixo) e um n�mero aleat�rio.');

// Templates Config Backend
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD','<b>Layouts determinan como o conteudo que ser� exibido na p�gina principal</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO','<br />V�rios layouts padr�o ser�o inclu�dos na instala��o. Eles podem ser customizados como desejado e novos layouts poder�o ser criados. Para simplificar, estas configura��es voc� poder� selecionar para usar com o editor WYSIWYG ou uma �rea de texto simples para edi��o.<br /><br />No caso do componente da p�gina frontal, voc� n�o poder� modificar ap�s efetuar as modific��es no <b>layout padr�o</b> o <b>conte�do original</b> (significado do status ap�s a instala��o) pode ser restaurado a qualquer hora. Para isso, remover <b>todos os textos</b> no respectivo layout padr�o e campos selecionados inseridos <b>Salvar</b>. A p�gina ser� salva com o conte�do original. <b>Cuidado:</b> modifica��es feitas podem ser perdidas.<br /><br />Nota: importantes vari�veis s�o usadas nos layouts (e.g. <font color=darkred>{files}</font>). As vari�veis s�o substitu�das pelo atual conteudo gerado no site atual.<br />');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS','Layout: Categorias');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DESC','Isto � como as <b>categorias</b> ser�o exibidas na p�gina frontal. Se voc� tem a op��o selecionada <b>Exibir o resumo das categorias como p�gina principal</b> nas configur��es globais, os campos reservados (vari�veis) {files} e {checkbox_top} (variables) ser�o usadas para exibir somente uma categoria.<br /><br /><font color=red>{files} {form_hidden} {form_button} {checkbox_top}</font> variables <font color=red>N�O</font> devem ser removidas do c�digo! Somente remover as vari�veis {checkbox_top} do c�digo se a vari�vel {url_download} estiver sendo usada no arquivo de layout. A tag {files} � substitu�da pelos dados inseridos no layout. <br /><br />Campos reservados dispon�veis (vari�veis):<br />{cat_title} {cat_description} {cat_pic} {files} {checkbox_top} {sum_subcats} {sum_files_cat}');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TITLE','<b>Layout de Informa��es da categoria::</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_INFO_TEXT','<p>Este � um gr�fico de exemplo das categorias exibidas na p�gina principal. As bordas vermelhas escuras indicam as �reas que podem ser alteradas. </p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES','Layout: Arquivos');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DESC','Isto � como os <b>arquivos</b> s�o exibidos na p�gina principal. <br />Campos reservados dispon�veis (variables):<br />{checkbox_list} {cat_id} {file_id} {file_title} {release} {pic_is_new} {pic_is_hot} {pic_is_updated} {thumbnail} {description} {link_to_details} {file_pic} {price_title} {price_value} {license_title} {license_text} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TITLE','<b>Inform��es sobre layout de arquivo:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_INFO_TEXT','<p>Exemplo para exibi��o da lista na p�gina frontal. Dentro da caixa vermelha voc� pode editar as op��es exibidas.</p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL','Layout: Sum�rio / Iniciar download');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_DESC','Este � o <b>sum�rio</b> da p�gina frontal exibido. A lista de arquivos selecionados estar� presente para os usu�rios antes dos downloads.<br />Aqui � onde voc� pode modificar o que ser� exibido nesta p�gina. Classes CSS, c�digo HTML e testos arbitr�rios podem ser inseridos.<br /><br />As vari�veis <font color=red>{download_liste}</font> <font color=red>NÂO</font> devem ser removidas do c�digo!<br /><br />Campos reservados dispon�veis:<br />{summary_pic} {title_text} {download_liste} {license_note} {download_link} {external_download_info}'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TITLE','<b>Informa��o sobre o layout de sum�rio</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FINAL_INFO_TEXT','<p>Este � um exemplo gr�fico da p�gina frontal. A borda vermelha escura indica a �rea que voc� pode mudar o que ser� exibido aqui. </p>');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL','Layout: E-mail');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_MAIL_DESC','Aqui � onde voc� pode formatar <b>e-mails</b> que  (quando ativado) ser�o enviados para o endere�o especificado na configura��o ap�s cada download. C�digo HTML e texto arbrit�rio podem ser inclusos.<br /><br />Campos reservados dispon�veis:<br /> {file_list} {ip_address} {date_time} {user_name} {user_group}');

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
DEFINE('_JLIST_BACKEND_CATSLIST_ORDERING','Ordena��o');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL',' Categoria(s) deletada(s).');

// access controll info
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ALL','Todos');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_REGGED','Registrado');
DEFINE('_JLIST_BACKEND_CATSLIST_ACCESS_ADMINS','Especial');

//BACKEND CATSEDIT
DEFINE('_JLIST_BACKEND_CATSEDIT_TITLE','Editar categoria');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE','Categoria deve ter um t�tulo');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_PUBL',' Categoria(s) publicada(s).');
DEFINE('_JLIST_BACKEND_CATSEDIT_SUC_UNPUBL',' Categoria(ies) unpublished.');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE_ERROR_DIR','Erro: direct�rio n�o pode ser renomeado!');
DEFINE('_JLIST_BACKEND_CATSEDIT_EDIT','Editar Categoria');
DEFINE('_JLIST_BACKEND_CATSEDIT_ADD','Adicionar Categoria');
DEFINE('_JLIST_BACKEND_CATS_SAVEORDER','Nova ordena��o salva');
DEFINE('_JLIST_BACKEND_CATS_USED','Esta categoria est� sendo editada por outro administrador.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_COPY','Uma falha ocorreu durante a opera��o de c�pia da Lista de Categoria.');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_DESCRIPTION','Descri��o da Categoria');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_TEXT','SSelecione o s�mbolo da categoria');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_PREVIEW','Visualizar imagem');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_PIC_DESC','Os s�mbolos selecionados podem ser exibidos com {cat_pic} no layout da categoria.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_TITLE','Configurar permiss�es');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_DESC','Editar permiss�es. Definir a permiss�o do Usu�rio para as categorias, subdiret�rios e os downloads inclusos. <b>Decisivo para acessar SEMPRE as categorias superiores.</b> Se voc� selecionar "especial", membros com perfil de "autor" podem ler e efetuar download.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_1','P�blico pode ler e efetuar download');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_2','P�blico e Usu�rios Registrados podem ler e efetuar o download');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_3','Somente Usu�rios Registrados podem ler e efetuar download');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_ACCESS_LEVEL_4','omente Membros Especiais podem ler e efetuar download');

//BACKEND FILESLIST
DEFINE('_JLIST_BACKEND_FILESLIST_TITLE','Downloads');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH','Pesquisar');
DEFINE('_JLIST_BACKEND_FILESLIST_SEARCH_LIMIT','Limite');
DEFINE('_JLIST_BACKEND_FILESLIST_CATS','Todas Categorias');
DEFINE('_JLIST_BACKEND_FILESLIST_NOCATS','Nenhuma Categoria');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE','Downloads');
DEFINE('_JLIST_BACKEND_FILESLIST_HITS','N�mero de Downloads');
DEFINE('_JLIST_BACKEND_FILESLIST_CAT','Categoria');
DEFINE('_JLIST_BACKEND_FILESLIST_RELEASE','Vers�o');

DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION','Descri��o');
DEFINE('_JLIST_BACKEND_FILESLIST_DADDED','Data');
DEFINE('_JLIST_BACKEND_FILESLIST_FILENAME','Nome do Arquivo');
DEFINE('_JLIST_BACKEND_FILESLIST_AUTHOR','Autor');
DEFINE('_JLIST_BACKEND_FILESLIST_PUBLISHED','Publicado');
DEFINE('_JLIST_BACKEND_FILESLIST_ORDERING','Ordem');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL',' Download(s) deletado(s)');
DEFINE('_JLIST_BACKEND_FILES_SAVEORDER','Nova ordem salva');
DEFINE('_JLIST_BACKEND_FILES_USED','Este download est� sendo editado por outro administrador.');

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
DEFINE('_JLIST_BACKEND_FILESEDIT_ROOT_DIR_TITLE','Diret�rio principal de (Envio)');

DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_1','Todos os subdiret�rios s�o grav�vel!');
DEFINE('_JLIST_BACKEND_FILESEDIT_UPLOAD_DIR_LIST_INFO_2','Subdirectories <b>N�O</b> grav�vel! Verifique as permiss�es no servidor (FTP: dever� estar CHMOD 777)');
DEFINE('_JLIST_BACKEND_FILESEDIT_CHECK_PERMISSIONS','Arquivo n�o pode ser enviado. Verifique as permiss�es no servidor (FTP: dever� estar CHMOD 777)');

// language
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE','Idioma');
DEFINE('_JLIST_BACKEND_FILESEDIT_LANGUAGE_DEFAULT_LIST','Selecione:, Ingl�s, Alem�o, Franc�s, Italiano, Espanhol, Portugu�s, Russo, Polon�s, Holand�s');

// system
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM','Sistema');
DEFINE('_JLIST_BACKEND_FILESEDIT_SYSTEM_DEFAULT_LIST','Selecione:, Joomla 1.0, Joomla 1.5, Windows, Linux, MacIntosh');

DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSES_LIST','Selecionar Licen�a');
DEFINE('_JLIST_BACKEND_FILESEDIT_REMOVE_OK','Arquivo deletado.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_PUBL',' Download(s) publicado(s).');
DEFINE('_JLIST_BACKEND_FILESEDIT_SUC_UNPUBL',' Download(s) despublicado(s).');

DEFINE('_JLIST_BACKEND_FILESEDIT_REQUIRES_INFO','Campos marcados <b><font color=red>*</font></b> devem ser preenchidos!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_TITLE','T�tule <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION','Descri��o');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_TEXT','Selecione s�mbolo do arquivo');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_PREVIEW','Visulizar');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FPIC_DESC','Item selecionado pode ser exibido ao longo de um espa�o reservado.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT','Associa��o de Categoria <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_LICENSE','Licen�a');
DEFINE('_JLIST_BACKEND_FILESEDIT_RELEASE','Vers�o');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE','Tamanho');
DEFINE('_JLIST_BACKEND_FILESEDIT_SIZE_DESC','Se n�o escolhido, o tamanho ser� definido automaticamente');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED','Data e hora');
DEFINE('_JLIST_BACKEND_FILESEDIT_DADDED_DESC','Defina a data no formato: <b>YYYY-MM-DD H:mm:ss</b> ou use as fun��es de calend�rio. Quando omitido as data-hora corrente ser�o definadas automaticamente.');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE','Selecione o arquivo para enviar');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_DESC','Neste campo voc� pode definir um nome de arquivo para ser tranferido para o servidor. Este nome dever� ser usado para download.');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_INFO','Nome atual do arquivo:');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER','Um nome de arquivo definido:');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_NO','Nenhum nome de arquivo definido!');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_ADD_FROM_SERVER_LIST','Selecione o arquivo');
DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_REMOVE','<b>Deleta os arquivos assinalados do servidor</b>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_HOME','Web site (com http:// )');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR','Nome do Autor');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL','URL do Autor ou endere�o de e-mail');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_URL_DESC','Endere�o de e-mail ser� ser criptografado automaticamente.');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD','Diret�rio de principal de envio');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_WRITABLE','Status: <font color=green><strong>GRAV�VEL</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_NOTWRITABLE','Status: <font color=red><strong>N�O GRAV�VEL</strong></font>');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_WRITABLE','Status: <font color=green><strong>GRAV�VEL</strong></font>');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_TEMP_NOTWRITABLE','Status: <font color=red><strong>N�O GRAV�VEL</strong></font>');

//BACKEND LICENSE LIST
DEFINE('_JLIST_BACKEND_LICLIST_TITLE_HEAD','Licen�as');
DEFINE('_JLIST_BACKEND_LICLIST_TITLE','Nome da licen�a');
DEFINE('_JLIST_BACKEND_LICLIST_LINK','Link');
DEFINE('_JLIST_BACKEND_LICLIST_DEL','Licen�a(s) deletada(s)');

//Backend LICENSE EDIT
DEFINE('_JLIST_BACKEND_LICEDIT_TITLE','Editar Licen�a');
DEFINE('_JLIST_BACKEND_LICEDIT_ERROR_TITLE','A licen�a deve ter um nome.');
DEFINE('_JLIST_BACKEND_LICEDIT_SAVE','Licen�a salva');
DEFINE('_JLIST_BACKEND_LICEDIT_TEXT','Nome da Licen�a');
DEFINE('_JLIST_BACKEND_LICEDIT_EDIT','Editar Licen�a');
DEFINE('_JLIST_BACKEND_LICEDIT_ADD','Adicionar licen�a');
DEFINE('_JLIST_BACKEND_LIC_USED','Esta licen�a est� sendo editada por outro administrador.');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_TITLE','Nome da licen�a');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_URL','Link para a licen�a');
DEFINE('_JLIST_BACKEND_LICEDIT_LIC_DESCRIPTION','Descri��o da licen�a');

//BACKEND TEMPLATES SUBMENU
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_NAME','Layout Administra��o');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_CATS','Categorias');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_FILES','Arquivos');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_SUMMARY','Sum�rio');
DEFINE('_JLIST_BACKEND_CPANEL_TEMPLATES_EMAIL','E-Mails');
DEFINE('_JLIST_BACKEND_TEMPPANEL_TABTEXT_INFO','Informa��o');

// Backend TEMPLATES TEMPLATES TITLES
DEFINE('_JLIST_BACKEND_TEMPLIST_CATTITLE_HEAD','Layout de Categoria');
DEFINE('_JLIST_BACKEND_TEMPLIST_FILESTITLE_HEAD','Layouts de Arquivos');
DEFINE('_JLIST_BACKEND_TEMPLIST_SUMTITLE_HEAD','Layouts de Sum�rio');
DEFINE('_JLIST_BACKEND_TEMPLIST_MAILTITLE_HEAD','Layouts de E-Mail');

//BACKEND TEMPLATES LIST
DEFINE('_JLIST_BACKEND_TEMPLIST_MENU_TEXT_ACTIVE','Ativado');
DEFINE('_JLIST_BACKEND_TEMPLIST_TITLE','Nome do layout');
DEFINE('_JLIST_BACKEND_TEMPLIST_TYP','Tipo do layout');
DEFINE('_JLIST_BACKEND_TEMPLIST_ACTIVE','Ativo');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED','Layout padr�o');
DEFINE('_JLIST_BACKEND_TEMPLIST_LOCKED_DESC','<b>Nota:</b> Layouts padr�es s�o partes integrais do jDownloads e n�o podem ser deletados. <br />Na cria��o de um novo layout padr�o os textos ser�o exibidos como padr�o.');
DEFINE('_JLIST_BACKEND_TEMPLIST_DEL',' Layout(s) deletado(s)');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_LOCKED','Layout padr�o n�o pode ser deletado..');
DEFINE('_JLIST_BACKEND_TEMPLIST_ERROR_IS_ACTIVE','Layout ativo n�o pode ser deletado.');

//Backend TEMPLATES EDIT
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE','Editar Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ERROR_TITLE','Erro: Um layout deve ter um nome.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SAVE','Layout salvo');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ACTIVE','Layout ativado');
DEFINE('_JLIST_BACKEND_TEMPEDIT_EDIT','Editar Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_ADD','Adicionar Layout');
DEFINE('_JLIST_BACKEND_TEMP_USED','Este layout est� sendo editado por outro administrador.');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME','Nome');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP','Tipo');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT','Layout');
DEFINE('_JLIST_BACKEND_TEMPEDIT_URL','Visualizar link');

DEFINE('_JLIST_BACKEND_TEMPEDIT_NAME_DESCRIPTION','Declare um nome significante para este layout.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TYP_DESCRIPTION','Selecione o tipo apropriado de layout.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_TEXT_DESCRIPTION','Este � o layout que ser� exibido da p�gina frontal.');

//Backend TEMPLATES TYPS
DEFINE('_JLIST_BACKEND_TEMP_TYP1','Categorias');
DEFINE('_JLIST_BACKEND_TEMP_TYP2','Arquivos');
DEFINE('_JLIST_BACKEND_TEMP_TYP3','Sumario');
DEFINE('_JLIST_BACKEND_TEMP_TYP4','E-Mail');


//Backend Backup and Restore
DEFINE('_JLIST_BACKEND_RESTORE_TITLE_HEAD','Restaurar Backup');
DEFINE('_JLIST_BACKEND_RESTORE_FILE','Selecione um arquivo de backup');
DEFINE('_JLIST_BACKEND_RESTORE_RUN','Restaurar as permiss�es do banco de dados agora');
DEFINE('_JLIST_BACKEND_RESTORE_RUN_FINAL','Iniciar a restaura��o do backup?');
DEFINE('_JLIST_BACKEND_RESTORE_WARNING','Durante a restaura��o do backup, o banco de dados atual ser� substitu�do pelo banco de dados do backup.<br /><br />Isto n�o � uma garantia de que a restaura��o do backup ocorrer� sem problemas. Para adicionar seguran�a, � recomendado efetuar uma c�pia do banco de dados via ftp-client. Se uma nova vers�o do jdownloads alterar as tabelas do banco de dados atual, uma restaura��o do jdownloads dever� criar uma nova estrutura de categorias. Por favor, espere o final da opera��o de restara��o do banco de dados terminar antes de atualizar a p�gina. No caso de uma grande estrutura de categoria e arquivos, o processo de restaura��o poder� demorar um certo tempo. Informa��es sobre a restaura��o podem ser encontadas no "Log de Restaura��o"');
DEFINE('_JLIST_BACKEND_RESTORE_MSG','%s A restaura��o foi executada com sucesso.');
DEFINE('_JLIST_BACKEND_RESTORE_MSG_2','Veja as inform��es da restaura��o no: "Log de Restaura��o".');

//Backend CSS & LANGUAGE EDIT
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE','Arquivo CSS');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE','Arquivo de idioma');
DEFINE('_JLIST_BACKEND_EDIT_CSS_FIELD_TITLE','Conte�do do arquivo CSS');
DEFINE('_JLIST_BACKEND_EDIT_LANG_FIELD_TITLE','Conte�do do arquivo de idioma');
DEFINE('_JLIST_BACKEND_EDIT_CSS_TITLE_EDIT','Editar arquivo CSS');
DEFINE('_JLIST_BACKEND_EDIT_LANG_TITLE_EDIT','Editar arquivo de idioma');
DEFINE('_JLIST_BACKEND_EDIT_CSS_SAVED','Arquivo CSS salvo');
DEFINE('_JLIST_BACKEND_EDIT_LANG_SAVED','Arquivo de idioma salvo');
DEFINE('_JLIST_BACKEND_EDIT_LANG_WRITE_STATUS_TEXT','<big>O arquivo de idioma �: ');
DEFINE('_JLIST_BACKEND_EDIT_CSS_WRITE_STATUS_TEXT','<big>O arquivo CSS �: ');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_YES','<font color="green">grav�vel!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_NO','<font color="#990000">N�O grav�vel!</font></big>');
DEFINE('_JLIST_BACKEND_EDIT_LANG_CSS_FILE_WRITABLE_INFO','O arquivo deve ser grav�vel para poder salvar as novas configur��es. Talves voc� tenha que mudar as permiss�es dele para CHMOD 777.');

// BACKEND OTHERS
DEFINE('_JLIST_FRONTEND_NOCAT','Nenhuma categoria dispon�vel!');
DEFINE('_JLIST_FRONTEND_NOFILES','Nenhum arquivo dispon�vel para esta categoria!');

// Information text
DEFINE('_JLIST_BACKEND_INFO_TEXT_TITLE','Informa��es do jDownloads');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TITLE','<b>Informa��es da licen�a:</b>');
DEFINE('_JLIST_BACKEND_INFO_LICENSE_TEXT','Este componente est� publicado sob lince�a <a href="http://www.gnu.de/documents/gpl.de.html" target="_blank">GNU/GPL licensing</a>.<br />Por instalar o jDownloads voc� aceita os termos de licen�a bem como as condi��es espec�ficas abaixo. Se voc� n�o aceitar isso, voc� tem a obriga��o de remover o componente novamente. <br /><br /><b>Condi��es adicionais:</b><br /><b>N�o � permitido</b> remover o link do <b>componente na p�gina principal</b>! O link adicional precisa estar vis�vel. Se voc� deseja remover o link a qualquer por qualquer motivo, por favor, contacte-me: <a href="mailto:info@joomlaaddons.de">info@joomlaaddons.de</a>.<br /><br />Adicionalmente, este componente � dispon�vel "como est�" sem nenhuma express�o implicita de garantia! Responsabilidade nenhuma sobre dados perdidos, e etc. O componente usado est� sobre a responsabilidade do instalador.<br /><b>Muito obrigado a todos os usu�riosque me ajudaram no desenvolvimento.');

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
Grupo de usu�rios: {user_group}<br />
IP do usu�rio: {ip_address}<br /><br />
Este e-mail � gerado automaticamente!');

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
DEFINE('_JLIST_SETTINGS_INSTALL_3','Informa��o sobre os downloads');
DEFINE('_JLIST_SETTINGS_INSTALL_4','webmaster@yourwebsite.com');
DEFINE('_JLIST_SETTINGS_INSTALL_5','info@yourwebsite.com');


// ****************************************************************************
//		NEW IN VERSION 1.2 beta
// ****************************************************************************

// JAVASCRIPT (jdownloads.js) MESSAGES <<< Umlaute NICHT umwandeln !! >>>
DEFINE('_JLIST_JAVASCRIPT_TEXT_1','Por favor, selecione um outro arquivo na categoria antes de apertar o bot�o continue.');
DEFINE('_JLIST_JAVASCRIPT_TEXT_2','N�o existe ainda nenhum arquivo para download nesta categoria.\\n');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_TEXT_TO_SHORT','Pesquisar texto curto, por favor, insira no m�nimo 3 caracteres!');
DEFINE('_JLIST_FRONTEND_SEARCH_RESULT_NO_OPTION','Voc� precisa escolher pelo menos uma op��o de procura!');
// end javascript messages


DEFINE('_JLIST_INSTALL_1_2','Os dados j� s�o existentes no banco de dados!');
DEFINE('_JLIST_INSTALL_2_2','Dados foram alterados, adicionados ou n�o existem (tradu��o ou contexto devem ser checados!)!');
DEFINE('_JLIST_INSTALL_17','Instala��o do JoomFish encontrada! As defini��es jDownloads JoomFish foram adicionadas:');
//------------------------------------------
DEFINE('_JLIST_INSTALL_18','Os dados das defini��es do jDownloads JoomFish foram copiadas para:');
DEFINE('_JLIST_INSTALL_19','Se voc� quiser usar estas defini��es com JoomFish, use o instalador de Joomfish .');

DEFINE('_JLIST_FRONTEND_HOME_LINKTEXT','Resumo');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_CATLIST','Resumo');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_ONE_CAT','Categoria');
DEFINE('_JLIST_FRONTEND_SUBTITLE_OVER_DETAIL','Detalhes dos Downloads');

// PAGENAVIGATION FRONTEND
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_PAGE_TEXT','P�gina:');
DEFINE('_JLIST_FRONTEND_HEADER_PAGENAVI_TO_TEXT','de');

DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE','Pre�o');
DEFINE('_JLIST_BACKEND_FILESEDIT_PRICE_DESC','Pre�o e moeda definida.');

DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_4','Restaurar Log');

//FRONTEND UPLOAD
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_REGGED','Voc� deve estar registrado para enviar arquivos. Se voc� j� est� registrado, por favor fa�a seu login primeiro. ');
DEFINE('_JLIST_FRONTEND_UPLOAD_ACCESS_ONLY_SPECIALS','Voc� n�o tem autoriza��o para enviar aquivos.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_CATS_EXIST','Erro: Arquivos somente podem ser enviados para uma categoria se ela estiver criada e publicada.');
DEFINE('_JLIST_FRONTEND_UPLOAD_LINKTEXT','Enviar arquivo');
DEFINE('_JLIST_FRONTEND_UPLOAD_PAGE_TITLE','Enviar arquivo');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME','Selecionar arquivo:');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_SEND','Enviar arquivo');
DEFINE('_JLIST_FRONTEND_UPLOAD_FILENAME_BUTTON_TEXT_CLEAR','Limpar Campos');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_FILETYPE','Extens�es de arquivos permitidas');
DEFINE('_JLIST_FRONTEND_UPLOAD_ALLOWED_MAX_SIZE','Tamanho m�ximo permitido');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_NO_VALUE','Erro: nem todos os campos est�o preenchidos!<br />Por favor, preencha os campos requeridos.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILETYPE','Erro: extens�o de arquivos selecionado n�o permitido!<br />Por favor, selecione somente arquivos com extens�es permitidas.');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_FILESIZE','Erro: tamanho do arquivo selecionado � maior do que o permitido!');
DEFINE('_JLIST_FRONTEND_UPLOAD_ERROR_MOVE_FILE','Erro: um erro ocorreu durante a transferencia do arquivo para o servidor!');
DEFINE('_JLIST_FRONTEND_UPLOAD_OK','O arquivo foi tranferido com sucesso ao servidor!<br />Publica��o deve ser aprovada.');

// FRONTEND UPLOAD FIELD TITLE
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_NAME','Seu Name:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_MAIL','Seu E-Mail:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_TITLE_FILE','T�tulo do Download:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_PRICE','Pre�o:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE','Descri��o Curta:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_DESC_FILE_LONG','Descri��o Longa:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR','Autor:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_AUTHOR_URL','Autor Website:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LIZENZ','Licen�a:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_VERSION','Vers�o:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LISTBOXES','Selecione:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_CATEGORY','Categoria:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_LANGUAGE','Idioma:');
DEFINE('_JLIST_FRONTEND_UPLOAD_TITEL_SYSTEM','Sistema:');
DEFINE('_JLIST_FRONTEND_UPLOAD_SYMBOL_TEXT','Campo obrigat�rio');

//FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_LINKTEXT','Pesquisar Downloads');

// AUTOCHECK DOWNLOADS
DEFINE('_JLIST_BACKEND_AUTOCHECK_NEW_CATS','novo diret�rio foi encontrado e adicionado como nova categoria!!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_MISSING_CATS','Diret�rio de categoria n�o foi encontrado, consequentemente as novas categorias n�o foram publicadas!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_NEW_CATS','Nenhum novo diret�rio encontrado!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_NO_MISSING_CATS','Todas os diret�rios de categorias existentes foram publicados!');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TITLE','�ltima mensagem interna (a��es executadas):');
DEFINE('_JLIST_BACKEND_AUTOCHECK_LOG_TAB_TITLE','�ltima mensagem interna (ac�es) durante o monitoramento dos diret�rios de Download');
DEFINE('_JLIST_BACKEND_AUTOCHECK_REFRESH_MESSAGE','Voc� pode atualizar a p�gina para ver as modifica��es!');

DEFINE('_JLIST_BACKEND_RESTORE_LOG_TAB_TITLE','Resultados da �ltima restaura��o de backup');

DEFINE('_JLIST_BACKEND_PANEL_STATUS_DESC_OFFLINE','O modo de manuten��o est� ativado! Entretanto a �rea de Download n�o est� dispon�vel neste momento para os visitantes normais! Esta �rea de download est� dispon�vel exclusivamente para os membros do grupo "autor".');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_HEADER','Status dos Downloads');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_DOWNLOADS_OFF_DESC','O monitoramento autom�tico do diret�rio de downloads est� desativado!');
DEFINE('_JLIST_BACKEND_PANEL_STATUS_VERSION_HEADER','Informa��o da vers�o atual do jDdownloads');

DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME','Tempo (em minutos) para a dele��o dos arquivos tempor�rios zip');
DEFINE('_JLIST_BACKEND_SETTINGS_DEL_TEMPFILE_TIME_DESC','Indicar o valor em minutos, para a dele��o de cada arquivos Zip criado por multiplos downloads. Se voc� oferecer arquivos grandes, voc� precisar� de um valor alto. Valor padr�o: 20 (minutos).');

DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FRONTEND_HEAD_UPLOAD','Configura��o de envio da p�gina frontal');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_ERROR','ERRO: Diret�rio principal de Download n�o pode ser renomeado!');
DEFINE('_JLIST_BACKEND_SETTINGS_UPLOADDIR_RENAME_OK',' - Diret�rio principal de Download renomeado com sucesso!');

DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO','Monitorar diret�rio de Download? ');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_DESC','Se esta op��o for selecionada, todos os diret�rios ser�o checados por modific��es e base de dados automaticamente atualizados. Entretanto diret�rios e arquivos carregados por FTP no servidor ser�o adicionados automaticamente como novos registros e como novos dados em categorias e tabelas de downloads. Se as categorias e Downloads n�o forem encontrados, ent�o as entradas ser�o configuradas como: <b>N�o publicado</b >.<b>Configura��o padr�o: SIM.</b>');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_CHECKBOX_INFO','<b>Nota:</b> Op��es de caixa de sele��o para Download ser�o definidas em administra��o de layout por arquivos de layout!');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_USE_SYMBOLE_INFO','<b>Nota:</b> Op��es de Mini s�mbolos ser�o exibidas no alyout da administra��o por arquivos de layout!');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE','N�mero de entradas por p�gina');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_FILES_PER_SIDE_DESC','Indicar aqui o n�mero de entradas de Categorias/Downloads que ser�o exibidas pela p�gina frontal.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_TITLE','T�tulo a ser usado no cabe�alho');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_HEADER_DESC','Definir aqui o t�tulo que dever� ser usado na p�gina frontal como t�tulo do componente, ex.. "Downloads".');

// FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE','Ativa��o do envio na p�gina frontal:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACTIVE_DESC','Se ativado, o grupo de usu�rios definidos abaixo poder�o enviar arquivos com um formul�rio.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS','Quem pode enviar arquivos:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_PERMISSIONS_DESC','Aqui define cada grupo de usu�rio que pode enviar arquivos . A configura��o "Especial" permite membros com status >= "autor" para acessar o formul�rio de envio.');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ALL','Todos');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_REGGED','Registrado');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_ACCESS_ADMINS','Especial');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES','Extens�es de arquivos permitidos:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILETYPES_DESC','Definir aqui uma extens�o individual que deve ser enviada com o formul�rio de envio. Entre com cada valor separado por v�rgula (,).');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE','Tamanho m�ximo em KB:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FILESIZE_DESC','Definir aqui o tamanho m�ximo permitido para enviar arquivos em kilobytes (1024 Kb = 1 Mb). Valor pr�-configurado: 2048.');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT','Texto do formul�rio de envio:');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_DESC','Definir aqui o layout (conte�dos e formatos) do formul�rio de envio (antes ou abaixo do texto do formul�rio). Os campos reservados: {form} dever�o ser substitu�dos pelo atual formul�rio na sa�da da p�gina frontal. Os s�mbolos dos campos reservados n�o podem ser deletados!');

// Platzhalter {form} NICHT �NDERN ODER L�SCHEN !!!
// DO NOT DELETE, EDIT OR TRANSLATE: {form} !!! 

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_UPLOADS_FORM_TEXT_LAYOUT','Este formul�rio permite voc� enviar arquivos para o servidor. Todos os campos com s�mbolos s�o obrigat�rios. Seu nome ou endere�o de e-mail nunca deve ser� publicado para terceiros e ser� somente usado para informa��o interna.<br />
{form}<br />');

DEFINE('_JLIST_BACKEND_TEMPLIST_DEL_QUEST','Deletar Layout(s)?');
DEFINE('_JLIST_BACKEND_LICLIST_DEL_QUEST','Deletar Licen�a(s)?');

DEFINE('_JLIST_BACKEND_FILESEDIT_URL_DOWNLOAD_STATUS_DESC','Aqui voc� pode ver o status da configura��o do diret�rio principal de envio. Se isto n�o for edit�vel, por favor, cheque as permiss�es de acesso com um programa FTP. As permiss�es devem estar em CHMOD 777.');

DEFINE('_JLIST_BACKEND_FILESEDIT_HITS','N�mero de Downloads passados');
DEFINE('_JLIST_BACKEND_FILESEDIT_HITS_DESC','Aqui o contador de Download pode ser mofificado ou resetado');

DEFINE('_JLIST_BACKEND_FILESEDIT_FILE_CAT_DESC','Voc� deve definir um Download � uma categoria. Selecione uma categoria apropriada na lista. Se outra categia for selecionada depois. ent�o o arquivo de Download ser� automaticamente movido para o diret�rio da nova categoria.');

DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_KURZ','Descri��o Curta');
DEFINE('_JLIST_BACKEND_FILESEDIT_DESCRIPTION_LONG','Descri��o Longa');
DEFINE('_JLIST_BACKEND_FILESEDIT_EDITOR_INFO','No formul�rio de configura��o pode ser definido se o editor WYSIWYG ativado ou uma simples caixa de texto ser� usado para a edi��o.');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_STATUS','Status: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_SENT_IN_FROM_EMAIL','Endere�o de E-Mail: ');
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_TITLE','Erro: Download deve ter um T�tulo!');
DEFINE('_JLIST_BACKEND_FILESEDIT_CATLIST_ERROR','Erro: nenhuma categoria definida!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_ERROR',' - Erro: Arquivo de Download n�o pode ser movido!');
DEFINE('_JLIST_BACKEND_FILESEDIT_SAVE_MOVEFILE_OK',' - Arquivo de Download movido com sucesso!');

DEFINE('_JLIST_BE_NO_PUBL_FILES','Downloads sem categorias definidas n�o podem se publicados!');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_QUEST','Deletar Download(s)?');
DEFINE('_JLIST_BACKEND_FILESLIST_DESCRIPTION_SHORT','Descri��o (Curta)');
DEFINE('_JLIST_BACKEND_FILESLIST_PIC','S�mbolo');
DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION','<font color=#990000>Deletar arquivos de dados de a��es de download:</font>');

DEFINE('_JLIST_BACKEND_FILESLIST_DEL_FILES_OPTION_TOOLTIP','Se SIM, dados de download n�o ser�o somente deletados mas tamb�m os arquivos associados pelo servidor! Se o arquivo n�o for deletado e o monitoramento dos diret�rios de Download estiver ativado, ent�o o arquivo ser� automaticamente considerado como um novo Download armazenado!<br /><b>Configura��o recomendada: SIM</b >.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_OK',' - Arquivo(s) associados tamb�m deletados.');
DEFINE('_JLIST_BACKEND_FILESEDIT_DEL_FILES_ERROR',' - Arquivo(s) associados n�o deletados desde que perdidos.');
DEFINE('_JLIST_BACKEND_FILESLIST_FILE_ID','ID');

DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CAT_DEL_AFTER_COPY','Um erro ocorreu durante a opera��o de dele��o do diret�rio de categorias antigas');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE','T�tulo da categoria<b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_TITLE_DESC','Identifica��o da categoria. Para cada categoria um diret�rio ser� criado com o nome fornecido no t�tulo mas sem caraceteres especiais! Exce��o: <b>" - _ . , " </b>e caracteres de espa�o.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX','Categoria Principal');
DEFINE('_JLIST_BACKEND_CATSEDIT_ROOT_CAT_LISTBOX_NEW','Nova categoria principal');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE','Atribui��o da Categoria');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_TITLE_NEW','Nova categoria criada em / como <b><font color=red>*</font></b>');
DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC_NEW','Se uma nova categoria est� sendo criada ent�o selecione "Categoria Principal". Se a nova categoria for uma subcategoria de uma categoria existente, ent�o selecione categoria existente subordinada. Uma nova categoria ser� criada abaixo. A aloca��o de hierarquia pode ser moficada posteriormente.');

DEFINE('_JLIST_BACKEND_CATSEDIT_CAT_LISTBOX_DESC','Se voc� quer mover uma categoria, ent�o selecione uma categoria subordinada onde voc� queira mover a categoria atual. Se uma subcategoria servir no futuro como uma categoria principal ent�o selecione a op��o de "Categoria Principal".<br /><br /><b>Aviso:</b>
Na opera��o de salvar, o diret�rio atual ser� sobreposto automaticamente no servidor. Se sobrepor conte�dos de categorias em subcategorias , eles tambe´m ser�o sobrepostos. Para efetuar as oper��es internar com seguran�a, TODAS as outras categorias atuais abaixo das modific��es dever�o estar travadas pela edi��o das categorias nesta hora!');
DEFINE('_JLIST_BACKEND_CATSEDIT_SAVE','Categoria salva.');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_TITLE_CHARS_NOT_ALLOWED','Erro: o t�tulo cont�m caracteres especiais proibidos!');
DEFINE('_JLIST_BACKEND_CATSLIST_DEL_QUEST','Deletar Categoria(s)?');
DEFINE('_JLIST_BACKEND_CATSLIST_CATID','ID');
DEFINE('_JLIST_BACKEND_CATSLIST_PATH','Diret�rio');

// BACKEND CATS DELETE
DEFINE('_JLIST_BE_NO_DEL_SUBCATS_EXISTS','Categoria n�o pode ser deletada pela existencia de Subcategorias!');
DEFINE('_JLIST_BE_NO_DEL_FILES_EXISTS','Categoria n�o pode ser deletada por existir arquivos de Downloads!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_OK',' - Diret�rio deletado com sucesso!');
DEFINE('_JLIST_BE_DEL_CATS_DIRS_ERROR',' - Erro durante a opera��o de dele��o de diret�rio!');

DEFINE('_JLIST_BACKEND_NO_SELECT_ACTION','Por favor, selecione primeiro uma linha de entrada.!');

DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_TITLE','Quantas linhas na lista ser�o exibidas');
DEFINE('_JLIST_BE_SETTINGS_FILES_PER_SIDE_BE_DESC','Aqui voc� pode definir quantas linhas ser�o exibidas na lista do layout da p�gina de adminstra��o.');

DEFINE('_JLIST_UPLOAD_MAX_FILESIZE_INFO_TITLE','Tamanho m�ximo definido no arquivo de configura��o php.ini:');

DEFINE('_JLIST_BACKEND_TEMPLATE_ACTIVE_ERROR','Somente UM layout pode ser slecionado para ativa��o!');
DEFINE('_JLIST_AUTO_FILE_CHECK_IMPORT_BY','Auto Importar');
DEFINE('_JLIST_AUTO_FILE_CHECK_ADDED',   'Download adicionados    ');
DEFINE('_JLIST_AUTO_FILE_CHECK_DISABLED','Download n�o encontrado      ');
DEFINE('_JLIST_AUTO_CAT_CHECK_ADDED',    'Categoria adicionada');
DEFINE('_JLIST_AUTO_CAT_CHECK_DISABLED', 'Categoria n�o encontrada  ');

// MESSAGES AFTER CHECK FILES AND DIRS WHEN UPDATED FROM 1.1 alpha
DEFINE('_JLIST_CHECK_CATS_TITEL1','Voc� tem que atualizar a vers�o velha do jDownloads para Vers�o 1.2');
DEFINE('_JLIST_CHECK_CATS_TITEL2','Como consequ�ncia, todas as categorias e Downloads existentes devem ser criadas agora devem ser tranferidas em nova estrutura de categorias!');

DEFINE('_JLIST_CHECK_FINISH','Processo terminado!');
DEFINE('_JLIST_CHECK_CATS_CREATE','Categorias-diret�rios criados!');
DEFINE('_JLIST_CHECK_FILES_MOVE','Arquivo de Download sobreposto!!');
DEFINE('_JLIST_CHECK_FILES_NOT_FOUND','Arquivo de Download n�o encontrado!');
DEFINE('_JLIST_CHECK_FILES_NOT_MOVED','Arquivo de Download n�o pode ser sobreposto em diret�rio de categoria assinada!');
DEFINE('_JLIST_CHECK_CATS_NOT_FOUND','Categoria-diret�rios n�o podem ser criados!');

// MESSAGES AFTER RESTORE BACKUPFILE
DEFINE('_JLIST_AFTER_RESTORE_TITLE_1','Processo de restaura��o rodando:');
DEFINE('_JLIST_AFTER_RESTORE_1','Dados restaurados!');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_2','Checagem do conte�do do banco de dados iniciado:');
DEFINE('_JLIST_AFTER_RESTORE_3','Backup criado com uma antiga vers�o do jDownloads!');
DEFINE('_JLIST_AFTER_RESTORE_4','Os diret�rios de categorias e Downloads est�o sendo checados agora:');
DEFINE('_JLIST_AFTER_RESTORE_TITLE_3','Detalhe dos resultados:');

DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST','ERRO: Diret�rio de envio principal n�o existe!');
DEFINE('_JLIST_AUTOCHECK_DIR_NOT_EXIST_2','Por favor, crie os 2 diret�rios /downloads e /downloads/tempzipfiles no diret�rio principal do seu joomla usando um programa FTP e definas as permiss�es destes diret�rios para CHMOD 0777 - caso contr�rio o jDownloads n�o ir� funcionar!');
DEFINE('_JLIST_FRONTEND_HEADER_CATLIST_TITLE','Selecionar Categoria');
DEFINE('_JLIST_FRONTEND_HEADER_SUMMARY_TITLE','Sum�rio');
DEFINE('_JLIST_FRONTEND_HEADER_FINISH_TITLE','Download');

// FRONTEND SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_TITLE','Pesquisar Downloads');
DEFINE('_JLIST_FRONTEND_SEARCH_TEXT_TITLE','Pesquisar por');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_TITLE','Pesquisar um T�tulo');
DEFINE('_JLIST_FRONTEND_SEARCH_IN_DESC','Pesquisar em Descri��es');
DEFINE('_JLIST_FRONTEND_SEARCH_INFO_TEXT','Um m�ximo de 20 arquivos podem ser exibidos como resultado da pesquisa.');
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
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DESC','Este � o layout dos Downloads <b>P�gina de detalhes</b> na p�gina frontal.<br /><br />N�o remover os campos reservados de vari�veis <font color=red>{url_download}</font>!<br /><br />Vari�veis dispon�veis (campos reservados):<br />{file_title} {thumbnail} {pic_is_new} {pic_is_hot} {pic_is_updated} {url_download} {mirror_1} {mirror_2} {description_long} {details_block_title} {license_title} {license_text} {price_title} {price_value} {language_title} {language_text} {filesize_title} {filesize_value} {system_title} {system_text} {author_title} {author_text} {author_url_title} {author_url_text} {created_date_title} {created_date_value} {hits_title} {hits_value} {created_by_title} {created_by_value} {modified_by_title} {modified_by_value} {modified_date_title} {modified_date_value}.'); // changed in 1.4 beta (2)
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TITLE','<b>Informa��o sobre os detalhes do layout dos Downloads:</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_INFO_TEXT','<p>Exemplo gr�fico da p�gina frontal. A borda vermelha escura indica a �rea exibida que voc� pode modificar aqui.</p>');

// FRONTEND DOWNLOAD DETAILSITE
DEFINE('_JLIST_FE_DETAILS_PATHWAY_TEXT','Localiza��o do arquivos');
DEFINE('_JLIST_FE_DETAILS_LINK_TEXT_TO_DETAILS','>> Detalhes');
DEFINE('_JLIST_FE_DETAILS_LICENSE_TITLE','Licen�a');
DEFINE('_JLIST_FE_DETAILS_PRICE_TITLE','Pre�o');
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
// Vorgabewerte f&uuml;r Layouttabelle - hier bitte KEINE &Auml;nderungen oder �bersetzungen hier vornehmen !!!
///////////////////////////////////////////////////////////////////////////////
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_CATS_DEFAULT_NAME','Padr�o 1.4');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NAME','Padr�o 1.4');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_DETAILS_DEFAULT_NAME','Padr�o 1.4 - Informa��o Completa');
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
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_1_NAME','Layout padr�o com caixas de sele��o');
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
DEFINE('_JLIST_BACKEND_TEMPEDIT_TITLE_NOT_ALLOWED_TO_CHANGE_DESK','Voc� n�o pode mudar nomes de layouts padr�es!');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_FILES_DEFAULT_NEW_SIMPLE_2_NAME','Layout padr�o sem caixas de sele��os');
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
DEFINE('_JLIST_BACKEND_TEMPEDIT_NOTE_DESC','Informa��o adicional para o layout pode ser definida aqui.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_TITLE','O layout usa caixas de sele��o?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_CHECKBOX_DESC','Se sim, os descritivos das caixas de sele��o e os bot�es Continue s�o exibidos na sa�da. Adicionalmente os s�mbolos dos campos reservados<b>{checkbox_list}</b> devem ser inseridos no layout. Se n�o, os s�mbolos dos campos reservados <b>{url_download}</b>devem ser inseridos no layout.');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_TITLE','Inserir mini-s�mbolo?');
DEFINE('_JLIST_BACKEND_TEMPEDIT_SYMBOLE_DESC','Se sim, o mini-s�mbolo designado dever� ser inserido. Os tamanhos dos s�mbolos podem ser ajustados nas configura��es.');

DEFINE('_JLIST_FE_YES','SIM');
DEFINE('_JLIST_FE_NO','N�o');

DEFINE('_JLIST_BACKEND_EDIT_PUBLISHED','Publicado');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_DATE','�ltimas modifica��es');
DEFINE('_JLIST_BACKEND_FILESEDIT_MODIFIED_BY','por');
DEFINE('_JLIST_BACKEND_FILESEDIT_CREATED_BY','Criado por');

DEFINE('_JLIST_BACKEND_FILESEDIT_INFO_FIELDS_DESC','As caixas na esquerda, fornecem informa��es dos arquivos: nome do publicador, �ltimo editor, �ltima hora de edi��o');

DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_ACTIVE','Exibir Lista de Categoria no cabe�alho?');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_CATLISTBOX_DESC','Se SIM, uma caixa de listagem com todas as categorias publicadas dispon�veis para o usu�rio de acordo com as permiss�es do usu�rios ser� exibida no lado direito do cabe�alho. Por esta caixa de lisitagem, voc� pode ir diretamente para a Categoria/Subcategoria desejada.');

// SAMPLE DATA 
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_ROOT','Exemplo de Categoria');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_SUB','Subcategoria de exemplo');
DEFINE('_JLIST_SAMPLE_DATA_CAT_NAME_TEXT','Este � um exemplo de categoria para ilustra��o. Esta defini��o pode ser removida a qualquer hora.');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME','Download de exemplo');
DEFINE('_JLIST_SAMPLE_DATA_FILE_NAME_TEXT','Este � um (arquivo) de exemplo para ilustra��o. Esta defini��o pode ser removida a qualquer hora.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_ERROR','Por haver um erro. dados de exemplo n�o foram criados! Por favor, cheque as op��es no menu principal do jDownloads.');
DEFINE('_JLIST_SAMPLE_DATA_CREATE_OK','Dados de exemplo criados com sucesso!');
DEFINE('_JLIST_SAMPLE_DATA_BE_OPTION_LINK_TEXT','Instalar dados de exemplo agora');
DEFINE('_JLIST_SAMPLE_DATA_EXISTS','Dados de exemplo j� existem!');
DEFINE('_JLIST_SAMPLE_DATA_BACK_TO_PANEL','Voltar ao Painel de Controle');

DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_HEAD_INFO2','<br /><b><u>Explica��o dos Layouts</u></b><br /><b>Categorias: </b>Definir o layout das categorias dos itens desejados para download e para isso deve usar as caixas de sele��o acima e abaixo de cada item da lista de Download.<br /><b>Arquivos: </b>Definir o layout da lista de Download exibida abaixo das categorias (ver aqui embaixo).<br /><b>Detalhes do Downloads: </b>Definir a visualiza��o detalhada do layout de download.<br /><b>Sum�rio: </b>Definir o  layout do sum�rio da p�gina de download (para cada inicio de download atual) com a lista de arquivos selecionados para fazer downloaded.<br /><b>E-Mails: </b>Definir o layout do E-Mail que ser� recebido ap�s cada download pelo Administrador.');

// ANTI_LEECH_CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_TITLE','Protegendo seu Diret�rio de Download?');
DEFINE('_JLIST_BACKEND_SETTINGS_ANTILEECH_DESK','Se SIM, o arquivo htaccess.txt dever� ser copiado em seu diret�rio raiz de download e renomeado para .htaccess. Agora, a prote��o ser� ativada e todos os acessos externos aos arquivos est�o bloqueados incluindo os subdiret�rios. <b>Recommendado: SIM!</b>');
DEFINE('_JLIST_ACTIVE_ANTILEECH_ERROR',' - ERRO durante a c�pia do arquivo htaccess.txt!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OK',' - Prote��o de Download ativada!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_ERROR',' - Erro durante a exclus�o do arquivo .htaccess!');
DEFINE('_JLIST_ACTIVE_ANTILEECH_OFF_OK',' - Prote��o de Download desativada!');

DEFINE('_JLIST_FRONTEND_ANTILEECH_MESSAGE','Acesso aos downloads n�o autorizado!');
DEFINE('_JLIST_FRONTEND_FILE_NOT_FOUND_MESSAGE','O arquivo recomendado n�o foi encontrado!<br /><br />Por favor, informe o Webmaster!');

DEFINE('_JLIST_FRONTEND_SUMMARY_ZIP_FILESIZE','Tamanho do arquivo para o pacote de Download');
DEFINE('_JLIST_FRONTEND_NEXT_SITE_BUTTON','&nbsp;>>&nbsp;');
DEFINE('_JLIST_FRONTEND_PREV_SITE_BUTTON','&nbsp;<<&nbsp;');

DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_CATS_TITLE','N�mero de Categorias');
DEFINE('_JLIST_FRONTEND_SUBHEADER_NUMBER_OF_SUBCATS_TITLE','N�mero de Subcategorias');
DEFINE('_JLIST_BACKEND_CATSEDIT_ERROR_CATLIST','Por favor. escolha uma categoria ou >Categoria Principal<');

// NEW OPTION FOR DIREKT DOWNLOAD LINK
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_TITLE','Ativar download direto?');
DEFINE('_JLIST_BACKEND_SETTINGS_DIRECT_DOWNLOAD_ACTIVE_DESC','Se SIM: Durante o uso do campos reservados <b>{url_download}</b> no layout, o download ir� iniciar imediatamente, sem visualizar o site do sum�rio.');

// NEW OPTION FOR HOT AND NEW IMAGES IN DOWNLOADS
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_TITLE','A partir de quando o download pode ser considerado "popular"');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_DESC','Indicar o n�mero de downloads que o arquivo precisa ter para ser considerado "HOT". No final do t�tulo do download ir� aparece um simbolo "HOT".');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_TITLE','Nome do arquivo do s�mbolo');
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC','O arquivo indicado deve estar no diret�rio: <b>../components/com_jdownloads/images</b>.');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_TITLE','Quanto tempo o download ser� considerado como "novo"');
DEFINE('_JLIST_BACKEND_SETTINGS_NEW_DESC','Indicar o n�mero de dias que o download ser� considerado como "NOVO". No final t�tulo do inicio do download ir� exibir o s�mbolo "NOVO".');
// NEW OPTION FOR DOWNLOAD PIC BUTTON IN DOWNLOAD DETAILS
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_TITLE','Nome do s�mbolo de download');
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_DOWNLOAD_BUTTON_DESC','O arquivo indicado deve estar no diret�rio <b>../components/com_jdownloads/images</b> e deve ser usado como link de download nos detalhes do site de download.');

// NEW IN 1.2 beta 2
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH','Publica��o autom�tica de Download:');
DEFINE('_JLIST_FRONTEND_UPLOAD_AUTO_PUBLISH_DESC','Quando SIM, o arquivo de download ser� publicado ap�s o envio.');

// NEW IN 1.2 stable
DEFINE('_JLIST_BACKEND_DIRSEDIT_CREATE_DIR_MESSAGE_ERROR','Erro: O Diret�rio n�o pode ser criado! Cheque via FTP se as permiss�es CHMOD 0777 foram dadas para todos os diret�rios do jDownloads!');

// NEW IN 1.3 stable

// FOR CREATES MAIN MENU IN INSTALL
DEFINE('_JLIST_BACKEND_CPANEL_MAIN','Painel de Controle');
DEFINE('_JLIST_INSTALL_DEFAULT_DATE_FORMAT','%Y-%m-%d %H:%M:%S');

// NEW OPTION SORTORDER CATEGORIES
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_TEXT','Categorias ordem de classifica��o');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_SORTCATSORDER_DESC','Ordem pela qual as Categorias s�o classificados no front end. Selecione "Standard" para usar a ordem padr�o no backend\'s.');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_1','Padr�o');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_2','Nome ascendente');
DEFINE('_JLIST_BACKEND_SETTINGS_CATS_ORDER_3','Nome descendente');

// NEW TAB TITLE FOR AUTODETECT
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_TAB_TITLE','Monitoramento');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_HEADER_TITLE','Monitorar as pastas de download');

// NEW OPTION AUTOPUBLISH NEW FOUNDED FILES
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_TITLE','Publicar downloads automaticamente?');
DEFINE('_JLIST_BACKEND_SETTINGS_DOWNLOADS_AUTOPUBLISH_DESC','Se Sim, novos arquivos encontrados ser�o publicados imediatamente. Presume-se que voc� tenha esta op��o ativada.<br /><b>Padr�o: N�o.</b>');

// NEW OPTION  FOR AUTODETECT ALL FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_TITLE','Monitorar todos os tipos de arquivos?');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ALL_FILES_DESC','Se esta op��o estiver ativada, todos os tipos de arquivos ser�o monitorados!');

// NEW OPTION  FOR AUTODETECT ONLY THIS FILES
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_TITLE','Monitorar apenas as seguintes tipos de arquivos:');
DEFINE('_JLIST_BACKEND_SETTINGS_FAUTO_ONLY_THIS_FILES_DESC','Se esta op��o estiver ativada, apenas os tipos de arquivos mencionados ser�o monitorados! Valores devem ser separados por v�gula (,).');

// NEW COPY DOWNLOADS FUNCTION
DEFINE('_JLIST_BACKEND_FILES_COPY_TITLE','Copiar Downloads');
DEFINE('_JLIST_BACKEND_FILES_COPY_DESC','Selecine a Categoria de Destino.');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_1','Estes Downloads s�o marcados para c�pia:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_2','Dica: Se voc� selecionar a categoria pr�pria, � criada a c�pia como: "Copiar de <i>T�do do Download</i>"!');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_3','Publicar Downloads copiados:');
DEFINE('_JLIST_BACKEND_FILES_COPY_TEXT_4','Copiar tamb�m o arquivo:');
DEFINE('_JLIST_BACKEND_FILES_COPY_DOWNLOADS_TEXT','Copiar de');
DEFINE('_JLIST_BACKEND_FILES_COPY_SAVED','Downloads foram copiados!');

// NEW OPTION EXTERN DOWNLOAD URL
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_TITLE','Link de arquivo externo:');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_INFO','Para um arquivo de link externo, voc� tem que deletar o arquivo local primeiramente.');
DEFINE('_JLIST_BACKEND_FILE_EDIT_EXT_DOWNLOAD_DESC','Aqui voc� pode obter um arquivo externo para Download. Deixe ent�o o campo para o upload de arquivo vazio.<br ><b>Nota Importante:</b> Se um link para uma servidor de hospedagem (p. ex. Rapidshare) que s�o, voc� pode ter o funcionamento de download n�o garantido. Teste antes se necess�rio. Tamb�m o tamanho do arquivo nem sempre pode ser determinado. Este deve ent�o ser introduzidos manualmente.'); // changed in 1.3 RC2

//NEW OPTION FOR JCOMMENTS INTEGRATION
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_TITLE','Fun��es de Coment�rio de JComments?');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_DESC','Sim, ativar a fun��o de coment�rios de <b>JComments</b> no frontend.<br /><b>JComments</b> n�o � inclu�do com jDownloads e voc� precisa instalar e configurar primeiramente.<br />Voc� pode efetuar download da extens�o JComments em <a href="http://www.joomlatune.com">www.joomlatune.com.</a>');
DEFINE('_JLIST_BACKEND_SETTINGS_JCOMMENTS_EXISTS_DESC','Sim, exbir as fun��es de JComments na p�gina de detalhes de download<br /><b>JComments est� instalado!</b>');

// NEW TAB FOR FRONTEND UPLOAD CONFIG
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TAB_TITLE','Uploads');
DEFINE('_JLIST_BACKEND_SETTINGS_FE_UPLOAD_TITLE_HEAD','Formul�rio de configura��o de envio via site (Frontend)');

// NEW DOWNLOAD FIELDS FOR DOWNLOAD MIRRORS
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_TITLE','Link alternativo de arquivo externo:');
DEFINE('_JLIST_BACKEND_FILESEDIT_MIRROR_URL_DESC','Aqui voc� pode configurar um servidor alternativo para o download.<br />No Layouts ativado para Arquivos e/ou Detalhes de Download voc� tem que preencher os placeholders {mirror_1} {mirror_2}.');

//NEW TEXT FOR MIRRORS
DEFINE('_JLIST_FRONTEND_MIRROR_URL_TITLE_1','Alternativa 1');
DEFINE('_JLIST_FRONTEND_MIRROR_URL_TITLE_2','Alternativa 2');

//NEW FOR PLUGINS TAB
DEFINE('_JLIST_BACKEND_SETTINGS_TABTEXT_PLUGINS','Plugins');

//NEW FOR FILE PLUGIN
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_FILEPLUGIN_HEAD','Configura��o de Plugin de Conte�do (mos_jdownloads_file)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(c) por Pelma para jDownloads');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT','Layout padr�o:');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DEFAULTLAYOUT_DESC','Este layout � usado para exibir downloads no conte�do, quando o plugin � <b>ativo</b> (veja acima).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_NOT_INSTALLED','O plugin de conte�do mos_jdownloads_file que pode ser usado para exibir downloads de jDownloads nos artigos n�o � parte integrante do componente jDownloads e deve ser instalado separadamente. <br /><b>Status: O plugin de conte�do n�o est� instalado!</b><br />Voc� pode encontrar o plugin em <a href="http://demo.joomlaaddons.de/index.php?option=com_jdownloads&Itemid=69&task=viewcategoria&catid=9">www.JoomlaAddons.de</a>.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ONLINEPART','Parametros para plugin ativado');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEPART','Parametros para plugin desativado');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW','Exibir �cone NOVO');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWNEW_DESC','Exibir (ou n�o) o �cone NEW em conte�dos.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT','Exibir �cone HOT');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWHOT_DESC','Exibir (ou n�o) o �cone HOT em conte�dos.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN','Ativar Plugin');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_ENABLEPLUGIN_DESC','Plugin Ativo. Este n�o � o mesmo que o par�metro publicado no Joomla. Quando voc� desativar o plugin aqui, voc� pode informar os visitantes sobre isto. (Veja parametros acima)!');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED','Exibir mensagem quando plugin desativado');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SHOWDISABLED_DESC','Quando o plugin estiver desativado, voc� pode exibir uma mensagem no lugar do download. Veja parametros acima.<br \><b>N�o</b>: Para mostrar nada.<br \><b>Layout padr�o</b>: Exibe uma mensagem usando o layout padr�o (veja acima).<br \><b>Layout Offline</b>: Exibe uma mensagem usando o layout offline (veja acima).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE','Exibir titulo original de download');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_DOWNLOADTITLE_DESC','Sim: usar o t�tulo original de download (e seu �cone) em sua mensagem offline.  N�o: substituir o t�tulo original de download pelo conte�do do campo "Titulo substituto" acima.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE','Titulo substituto');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINETITLE_DESC','T�tulo para exibir quando o plugin estiver desativado (depende de sua sele��o acima).');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC','Descri��o substituta');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_OFFLINEDESC_DESC','Quando o plugin est� desativado, esta descri��o ser� mostrada no lugar da descri��o original do download.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT','Layout Offline (plugin desativado)');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_DESC','Use este layout para exibir uma mensagem offline quando o plugin estiver desativado.');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT1','N�o');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT2','Layout padr�o');
DEFINE('_JLIST_BACKEND_SETTINGS_FILEPLUGIN_SPECIALLAYOUT_OPT3','Layout Offline');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_OFFLINE_FILETITLE','Downloads est�o desativados.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_DESCRIPTION','If you are allowed to download, please contact the webmaster.');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_FILEUNKNOWN','N�o � poss�vel encontrar o download! ID=<b>{fileid}</b>');
DEFINE('_JLIST_FRONTEND_SETTINGS_FILEPLUGIN_LAYOUTUNKNOWN','N�o � poss�vel encontrar o layout <b>{thelayout}</b>!');

// NEW OPTIONS FOR DEFAULT CAT ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_FILE_NO_DEFAULT_PIC','Nenhuma imagem selecionada!');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_TITLE','Icone Padr�o para Categorias:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_CAT_PIC_DESC','Um �cone pode ser selecionado aqui, ser� atribu�do automaticamente em nova categoria. O tamanho armazenado � indicado acima.');

// NEW OPTIONS FOR DEFAULT FILE ICON
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_TITLE','�cone Padr�o para Downloads:');
DEFINE('_JLIST_BACKEND_SETTINGS_DEFAULT_FILE_PIC_DESC','Um �cone pode ser selecionado aqui, que ser� atribu�do automaticamente em novos downloads. O tamanho armazenado � indicado acima.');

// FOR MISSING NEW MINIPICS
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_PRICE','Pre�o');
DEFINE('_JLIST_FRONTEND_MINI_ICON_ALT_FILESIZE','Tamanho do arquivo');

// FOR DATAFIELDS IN  DOWNLOAD DETAILVIEW
DEFINE('_JLIST_FE_DETAILS_CREATED_BY_TITLE','Criado por');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_BY_TITLE','Modificado por');
DEFINE('_JLIST_FE_DETAILS_MODIFIED_DATE_TITLE','Alterado para');

// FOR EXTERN FILES -  USER INFO IF CHECKBOXES ACTIVE
// PLEASE USE NOT SPECIAL CHARS e.g. " ' & ...
DEFINE('_JLIST_FRONTEND_EXTERN_FILE_USER_INFO','Este arquivo precisa ser feito o download separadamente, uma vez que est� localizado em outro servidor. Por conseguinte, este arquivo pode n�o ser inclu�do em um dowload agrupado.');

// FOR SAMPLE PIC IN EMAIL LAYOUT 
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_EMAIL_INFO_TITLE','<b>Informa��o sobre o layout de e-mail</b>');
DEFINE('_JLIST_BACKEND_SETTINGS_TEMPLATES_EMAIL_INFO_TEXT','<p>Este � um exemplo gr�fico da informa��o do e-mail enviado. A borda vermelho escuro indica a �rea que voc� pode alterar a exibi��o. </p>');

// ******************************************************************************
// NEW IN 1.4 pre-release
// ******************************************************************************

// INSTALL - MOVE  IMAGES DIRECTORIES TO JOOMLA/IMAGES/JDOWNLOADS
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_ERROR','Problemas ao mover imagens de diret�rios.');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_OK','imagens movidas para o diret�rio ../images/jdownloads/');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_DEST_DIR_EXIST','As imagens no diret�rio .. /imagens/jdownloads/ j� existem!');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_COPY_ERROR','ERRO: N�o foi poss�vel copiar imagens do diret�rio!');
DEFINE('_JLIST_INSTALL_MOVE_IMAGES_DEL_AFTER_COPY_ERROR','ERRO: N�o foi poss�vel deletar imagens do diret�rio fonte depois de copiar!');

DEFINE('_JLIST_BACKEND_SETTINGS_IMAGES_NOTE','Nota: ap�s a instala��o de jDownloads, todas as imagens de utilizados ser�o movidas para o subdiret�rio Joomla: /imagens/jdownloads/. Quando voc� reinstalar jDownloads (atualiza��es por exemplo), todas as imagens n�o ser�o deletadas.');
// FOR MAIL AFTER FRONTEND UPLOADS

DEFINE('_JLIST_SETTINGS_INSTALL_6','Um novo arquivo foi enviado!');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_HEAD','configura��o de e-mail para arquivos enviados');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE_TITLE','layout de e-mail');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE_DESC','Voc� pode fazer o download do <b>E-mail</ b> de aprensenta��o, que depois (se ativado) para cada upload ser� enviado para o endere�o acima indicado. Pode ser c�digo HTML e qualquer texto acrescentado. <br /> <br /> Wildcard dispon�vel: <br />{name} {mail} {date} {ip} {file_title} {file_name} {description}');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_DOWNLOAD_TEMPLATE_DESC','Voc� pode fazer o download do <b>E-mail</ b> de aprensenta��o, que depois (se ativado) para cada download ser� enviado para o endere�o acima indicado. Pode ser c�digo HTML e qualquer texto acrescentado. <br /> <br /> Wildecard dispon�vel:<br />{file_list} {ip_address} {date_time} {user_name} {user_group}');
DEFINE('_JLIST_BACKEND_SETTINGS_GLOBAL_MAIL_UPLOAD_TEMPLATE','Comunicado sobre um arquivo de apresenta��o!<br />
<br />
Remetente: {name}<br />
E-Mail: {mail}<br />
Endre�o de IP: {ip}<br /><br />
Nome do Arquivo: {file_name}<br />
Titulo: {file_title}<br />
Descri��o: {description}<br />
Data: {date}<br /><br />
Este e-mail foi gerado automaticamente.');

// NEW FOR "NEW" IMAGES
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC2','Lista de todas as imagens para o diretorio: <b>../images/jdownloads/newimages </b> para selecionar.');

// FOR NEW OPTIONS: SCREENSHOT UPLOAD
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_TITLE','Tamanho das miniaturas');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_INFO','Se imagens forem utilizadas nos downloads, ap�s o envio da imagem, ser� gerado uma miniatura automaticamente. Tamanho das miniaturas pode ser definido. Nota: A condi��o para isto �, que tenha uma vers�o da biblioteca GD instalada no servidor (ver status).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_STATUS_GD_OK','Status: Biblioteca GD presente!');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_STATUS_GD_NOT_OK','Status: GD Library n�o instalada!');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_SIZE_HEIGHT','Altura maxima em pixels  (e.q.: 150).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_SIZE_WIDTH','Largura maxima em pixels (e.q.: 150).');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_NEW_TITLE','Providenciar amazenamento de todas as miniaturas novamente? ');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_NEW_DESC','Deletar a configura��o depois de armazenar todas as atualiza��es de miniaturas existentes e construir novas miniaturas com as dimens�es acima indicadas.');
DEFINE('_JLIST_CONFIG_SETTINGS_THUMBS_CREATE_ALL_MESSAGE','Todas as pre-visualiza��o de novas imagens foram re-criada!!');

// NEW FIELDS IN EDIT FILES FOR SCREENSHOTS
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_NO_PIC','Nenhuma imagem selecionada');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_TITLE','Por favor, selecione a imagem no servidor:');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_LIST_DESC','Todas as miniaturas de imagens ficar�o localizadas neste diret�rio para ser selecionada <b>/images/jdownloads/screenshots/thumbnails </b>. A imagem ativada pode ser indicada com o simbolo substituto {thumbnail} no layout.');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_UPLOAD_TITLE','Selecione uma imagem para enviar:');
DEFINE('_JLIST_BACKEND_FILESEDIT_THUMBNAIL_UPLOAD_DESC','Aqui voc� pode enviar uma imagem para o servidor. Isto � usado para download. O arquivo original ficar� armazenado em <b>/images/jdownloads/screenshots</b> e a miniatura � gerada automaticamente.');

// FOR MIRROR LINK - JAVASCRIPT ERROR MESSAGE
DEFINE('_JLIST_BACKEND_FILESEDIT_ERROR_ONLY_MIRROR','Erro: Por favor, selecione primeiro um arquivo interno ou externo. Link alternativo � poss�vel apenas opcionalmente.');

// FOR NEW MIRROR DOWNLOAD BUTTONS
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_MIRROR_BUTTON_TITLE1','Primeiro Bot�o Alternativo');
DEFINE('_JLIST_BACKEND_SETTINGS_DETAILS_MIRROR_BUTTON_TITLE2','Segundo Bot�o Alternativo');

// FOR NEW "UPDATED" ICON IN DOWNLOADS TITLE
DEFINE('_JLIST_BACKEND_SETTINGS_HOT_NEW_PIC_DESC3','Todos os arquivos estar�o na pasta: <b>../images/jdownloads/updimages </b>para escolher.');
DEFINE('_JLIST_BACKEND_SETTINGS_UPD_TITLE','Quanto tempo um download deve ser considerado "atualizado"');
DEFINE('_JLIST_BACKEND_SETTINGS_UPD_DESC','Digite o n�mero de dias que um download deve ser considerado como "atualizado". Estar� atr�s dos t�tulos de downloads, abaixo do �cone. Tal como um download � atualizado depois de cada altera��o. "0" para nenhum �cone.');

// FOR NEW OPTION - LOAD FILE IN BROWSER - NOT DOWNLOAD
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES','Quais tipos de arquivo ser�o abertos no Browser ');
DEFINE('_JLIST_BACKEND_SETTINGS_FRONTEND_VIEW_FILE_TYPES_DESC','Indique os tipos de arquivo que n�o ser�o oferecidos para Download. Estes arquivos ser�o aberto em uma nova janela no browser. Defina a extens�o separada por v�rgula (,). Example: html,htm,txt,pdf,doc,jpg,jpeg,png,gif');

//NEW FRONTEND PIC UPLOAD FIELD
DEFINE('_JLIST_FRONTEND_UPLOAD_PIC_FILETITLE','Tela de exemplo:');
DEFINE('_JLIST_FRONTEND_UPLOAD_PIC_ALLOWED_FILES','Tipos de arquivo permitido:');

// NEW FILTER OPTION IN FILES LIST - BACKEND
DEFINE('_JLIST_BACKEND_FILESLIST_FILTER_PUBLISHED','Publicado');
DEFINE('_JLIST_BACKEND_FILESLIST_FILTER_UNPUBLISHED','Nao Publicado');

// NEW INFO WHEN USING LIGHTBOX PLACEHOLDER
DEFINE('_JLIST_BACKEND_TEMPEDIT_INFO_LIGHTBOX','Quando voc� vai usar a Lightbox com a funcao Screenshots, voc� deve definir o espa�o reservado com essa sintaxe: a href="{screenshot}" rel="lightbox" > <img src="{thumbnail}" align="right" /></a>');  

// ******************************************************************************
// new in 1.4 beta
// ******************************************************************************

// NEW OPTION FOR MANAGER ACCESS IN BACKEND
DEFINE('_JLIST_BACKEND_SETTINGS_MANAGER_ACCESS','Acesso para gerentes?');
DEFINE('_JLIST_BACKEND_SETTINGS_MANAGER_ACCESS_DESC','Se setado como Sim, os membros do grupo Gerentes terao acesso a todas as funcoes da administracao do jDownloads. Se setado como Nao, somente os Administradores.');

// NEW OPTION FOR VIEW PLACEHOLDER IMAGE FOR SCREENSHOTS IN DETAIL SITE
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_TITLE','Exibir a aba Screenshot na pagina de detalhes?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_TEXT','Se definido como Sim, a imagem na esquerda � exibido na perspectiva detalhadamente, caso n�o seja atribu�do a tela de download. ');


// NEW OPTION FOR VIEW PLACEHOLDER IMAGE FOR SCREENSHOTS IN FILESLIST
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_IN_LIST_TITLE','Exibir a aba screenshots na lista de downloads?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PLACEHOLDER_IN_LIST_TEXT','Se definido como Sim, a imagem na esquerda � exibida na tela n�o se importar listas � atribu�da ao download. ');


// NEW OPTION FOR VIEW CATEGORY INFOS IN LISTVIEW - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_CAT_VIEW_INFO_IN_LISTS_TITLE','Exibir informacaoes das categorias?');
DEFINE('_JLIST_BACKEND_SETTINGS_CAT_VIEW_INFO_IN_LISTS_TEXT','Se definido como Sim, a categoria informa��o � mostrada novamente sob a barra de navega��o. Tal como o nome da categoria j� � vis�vel na navigationbar, isto n�o � bem-vinda. ');


// NEW OPTION FOR VIEW PAGE NAVIGATION ON THE BOTTOM - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_BOTTOM_TITLE','Exibir a navegacao de paginas na parte de baixo da pagina?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_BOTTOM_TEXT','Se definido como Sim, uma p�gina � exibida na barra de navega��o na parte inferior da p�gina. ');


// NEW OPTION FOR VIEW PAGE NAVIGATION ON THE TOP - FRONTEND
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_TOP_TITLE','Exibir a navegacao de paginas na parte de cima da pagina?');
DEFINE('_JLIST_BACKEND_SETTINGS_VIEW_PAGENAVI_TOP_TEXT','Se definido como Sim, uma p�gina � exibida na barra de navega��o no topo da p�gina. ');


// PUBLISH FILES MESSAGE IN BACKEND
DEFINE('_JLIST_BACKEND_EDIT_FILES_CAN_NOT_PUBLISH_INFO','Como alguns downloads n�o tinham qualquer arquivo sess�o, a publica��o n�o sera poss�vel!');

DEFINE('_JLIST_BACKEND_EDIT_FILES_SET_UPDATE_TITLE','Marcar download como atualizado:');
DEFINE('_JLIST_BACKEND_EDIT_FILES_SET_UPDATE_TEXT','Se definido como Sim, o download � marcado como atualizado no frontend. A dura��o do estado atualizado pode ser definida na configura��o.');

// FOR NEW META INFORMATION FIELDS IN CAT AND FILES EDIT
DEFINE('_JLIST_BACKEND_EDIT_METADESC_TITLE','Meta descricao:');
DEFINE('_JLIST_BACKEND_EDIT_METADESC_DESC','Aqui voc� pode opcionalmente meta fixada uma curta descri��o para a descri��o de meta-campo. Este ser� inserido no HTML-output '.);

DEFINE('_JLIST_BACKEND_EDIT_METAKEY_TITLE','Meta palavras-chave:');
DEFINE('_JLIST_BACKEND_EDIT_METAKEY_DESC','Aqui voc� pode opcionalmente definir algumas palavras-chave para o meta-campo palavras-chave. Estes ser�o inseridos no formato de HTML. ');


DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_INFOS_TITLE','Informacoes sobre o autor deste arquivo');
DEFINE('_JLIST_BACKEND_FILESEDIT_URL_HOME_DESC','URL para a pagina do autor. Isto devera ser exibido na pagina principal como link.');
DEFINE('_JLIST_BACKEND_FILESEDIT_AUTHOR_DESC','Aqui voc� pode digitar um nome e um endere�o na web ou inferior a um e-mail. No frontend voc� quer ver um link para uma p�gina web ou e-mail um link. ');

// NEW PARAMETER IN SEARCH
DEFINE('_JLIST_FRONTEND_SEARCH_NUMBERS','Numero de resultados da pesquisa');

// NEW USER INFO BY EXTERN SHAREHOSTER LINK
DEFINE('_JLIST_FRONTEND_DOWNLOAD_GO_TO_OTHER_SITE_INFO','O arquivo requisitado esta localizado em uma pagina externa. <br />Por favor, siga as instrucoes para iniciar o download.');

// NEW OPTION IN  EDIT DOWNLOADS
DEFINE('_JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_TITLE','Arquivo em uma pagina externa');
DEFINE('_JLIST_BACKEND_FILESEDIT_OPEN_LINK_IN_OTHER_WEBSITE_DESC','Se definido como sim, o arquivo est� localizado em uma p�gina externa. (Ex. Sharehoster) eo download s� pode ser iniciada no exterior p�gina. Um clique sobre o download come�a esta p�gina no browser. ');


// NEW SERVER INFO TAB IN CPANEL TAB
DEFINE('_JLIST_BACKEND_PANEL_TABTEXT_5','Informacao do Servidor');
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_TITLE','Informacao sobre a configuracao atual do servidor'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_DESC','O tamanho m�ximo dos arquivos depende da configura��o atual do servidor (php.ini). Abaixo voc� pode ver os valores atuais relevantes para uploads. Certifique-se que os valores s�o fixados alto o suficiente. Se voc� don 't t�m acesso ao php.ini, contacte o seu alojamento. Voc� pode encontrar informa��es sobre os par�metros em www.php.net.'); 

DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_FILE_UPLOADS','Envio de arquivos permitido:'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_FILESIZE','Tamanho de arquivo maximo permitido (max_filesize):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_POST_MAX_SIZE','Tamanho maximo permitido de POST: (post_max_size):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MEMORY_LIMIT','Limite de memoria (memory_limit):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_EXECUTION_TIME','Tempo maximo de execucao de scripts (max_execution_time):'); 
DEFINE('_JLIST_BACKEND_SERVER_INFOS_TAB_MAX_INPUT_TIME','Tempo maximo de upload (max_input_time):'); 

// NEW MESSAGE AFTER EDIT CATEGORIES AND CHANGING THE ACCESS LEVEL
DEFINE('_JLIST_BACKEND_CATSEDIT_SUM_CATS_ACCESS_LEVEL_CHANGED_AFTER_EDIT_MSG','Subcategorias devem ser setadas com as mesmas permissoes de acesso!');
DEFINE('_JLIST_BACKEND_CATSEDIT_CATS_ACCESS_LEVEL_CAN_NOT_CHANGED_MSG','Nota: Uma categoria nao pode ter um nivel de acesso menor do que uma categoria de n�vel superior. N�vel de acesso foi redefinido.');
DEFINE('_JLIST_BACKEND_CATSEDIT_CATS_ACCESS_LEVEL_CAN_NOT_CHANGED_MSG','Informa��es: Subcategorias n�o pode ter mais baixos do que os seus direitos imediatos m�e categoria. Portanto, os direitos de acesso foram redefinidas. ');


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
DEFINE('_JLIST_INSTALL_WARNING_CAT_ACCESS_RIGHTS','Houve algumas mudan�as nas categorias configura��es de seguran�a. Portanto verifique suas categorias, antes da publica��o!');
DEFINE('_JLIST_INSTALL_WARNING_DEFAULT_LAYOUTS_ARE_ACTIVE','Devido � introdu��o de um novo conjunto de espa�os reservados ao novo layout padr�o 1.4 foi activada. Voc� pode mudar o esquema nas configuracaos do layout.');

?>
