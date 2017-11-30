<!DOCTYPE html>
<html lang="fr">
<head>
      <title>Client</title>
      <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap4.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/dataTables.jqueryui.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/dataTables.material.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/dataTables.semanticui.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/dataTables.uikit.js"></script>
      <!--script src="<?php echo base_url(); ?>assets/js/buttons.print.min.js"></script-->
      <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css"/>
      <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>assets/css/dataTables.bootstrap.css"/>
      <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>assets/css/dataTables.foundation.css"/>
      <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>assets/css/dataTables.jqueryui.css"/>
      <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>assets/css/dataTables.material.css"/>
      <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>assets/css/dataTables.semanticui.css"/>
      <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>assets/css/dataTables.uikit.min.css"/>
      <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
      <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css"/>
      <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>assets/css/font-awesome.css"/>
      <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>assets/css/base-admin.css"/>
      <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>assets/css/base-admin-responsive.css"/>
      <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>assets/css/pages/dashboard.css"/>
      <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>assets/css/bootstrap-toggle-buttons.css"/>
      <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>assets/js/lib/ui/css/jquery-ui-1.10.0.custom.css"/>

      <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>assets/css/style.css"/>
<!--script type="text/javascript" src="<?php echo base_url(); ?>assets/js/datatables.min.js"></script-->
  </head>
  <body>  
 
<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container"><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> </a> 
                    <a class="brand" href="" target="_blank"> Geranium</a>
                    <div class="nav-collapse">
                        <ul class="nav pull-right">                           
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-cog"></i> Options <b
                                        class="caret"></b> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="">Routage</a></li>
                                    <li class="divider"></li>
                                    <li><a href="javascript:;">Aide</a></li>
                                </ul>
                            </li> 
                          
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> 
                                      #{sessionScope.username} <b class="caret"></b> </a>
                                    <ul class="dropdown-menu">
    <!--                                    <li><a href=""></a></li>-->
                                        <li class="divider"></li>
                                        <li><h:form><h:commandLink action="#{userBean.logout()}" value="Se déconnecter"></h:commandLink> </h:form></li>
                                    </ul>
                                </li>
                           
                        </ul>                     
                        <form class="navbar-search pull-right" id="form-search" action="#"
                              name="form-search"><input type="hidden" id="controller" value="" /> <input type="hidden" id="param" value="" /> <input type="text" class="search-query" placeholder="Search" name="s" id="s" />
                            <button>OK</button>
                        </form>
                        <div class="modal hide fade" id="search-dialog" style="width: 80%;left: 10%;top: 10%;z-index: 1050;overflow: auto;margin:0">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">times;</button>
                                <h3><span id="title_search" style="font-size: 20px;"></span></h3>
                            </div>
                            <div class="modal-body">
                                <div class="widget-header"><i class="icon-th-list"></i>
                                    <h3 id="title_table_search"></h3>
                                </div>
                                <table class="table table-striped table-bordered" id="table-search">
                                    <thead>
                                    </thead>
                                    <tbody>
                                    </tbody>  
                                </table>
                            </div>
                            <div class="modal-footer"><a href="#" class="btn" data-dismiss="modal" aria-hidden="true">Fermer</a></div>
                        </div>
                    </div>
                    <!--/.nav-collapse --></div>
                <!-- /container --></div> 
        </div> 
        <div id="header" class="subnavbar">
            <div class="subnavbar-inner" id="header">
                <div class="container">
                    <ul class="mainnav">
                        <li id="menu_home"> <a href='<?php echo site_url("main/")?>'><span>Clients</span> </a></li>
                        <li id="menu_article"> <a href='<?php echo site_url("main/produit")?>'><span>Produits</span> </a> </a>                           
                        </li>
                        <li id="menu_article"><a href='<?php echo site_url("main/pay")?>'><span>Payement</span> </a> </a>                           
                        </li> 
                        <li  id="menu_user"> <a href='<?php echo site_url("main/vente")?>'><span>Vente</span> </a> </a>                           
                        </li>
                        <li class="dropdown" id="menu_sim"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-money"></i><span>Mouvements</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="facture.xhtml">Facture</a></li>
                                <li class="divider"></li>
                                <li><a href="chiffresaffaire.xhtml">Chiffres d'affaire</a></li>
                            </ul>
                        </li>
                        <li class="dropdown" id="menu_sms"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th-large"></i><span>Base de données</span> <b class="caret"></b></a>                      
                         <ul class="dropdown-menu">                                
                                <li class="divider"></li>
                                <li><a href="backrestore.xhtml">Sauvegarder/Restaurer</a></li>
                            </ul>
                        </li>                                                                                     
                    </ul>
                </div> 
            </div>  
        </div>

