<?php
include("../config.php");
include("../tpl/header.php");
include("../tpl/aside.php");
?>

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">
                    <div class="container">
                        <div class="row">
						
<style>
.nav-tabs .glyphicon:not(.no-margin) { margin-right:10px; }
.tab-pane .list-group-item:first-child {border-top-right-radius: 0px;border-top-left-radius: 0px;}
.tab-pane .list-group-item:last-child {border-bottom-right-radius: 0px;border-bottom-left-radius: 0px;}
.tab-pane .list-group .checkbox { display: inline-block;margin: 0px; }
.tab-pane .list-group input[type="checkbox"]{ margin-top: 2px; }
.tab-pane .list-group .glyphicon { margin-right:5px; }
.tab-pane .list-group .glyphicon:hover { color:#FFBC00; }
a.list-group-item.read { color: #222;background-color: #F3F3F3; }
hr { margin-top: 5px;margin-bottom: 10px; }
.nav-pills>li>a {padding: 5px 10px;}

.ad { padding: 5px;background: #F5F5F5;color: #222;font-size: 80%;border: 1px solid #E5E5E5; }
.ad a.title {color: #15C;text-decoration: none;font-weight: bold;font-size: 110%;}
.ad a.url {color: #093;text-decoration: none;}
</style>
						
												<div class="col-sm-3 col-md-2">
													<div class="btn-group">
														<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
															Mail <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Mail</a></li>
															<li><a href="#">Contacts</a></li>
															<li><a href="#">Tasks</a></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-9 col-md-10">
													<!-- Split button -->
													<div class="btn-group">
														<button type="button" class="btn btn-default">
															<div class="checkbox" style="margin: 0;">
																<label>
																	<input type="checkbox">
																</label>
															</div>
														</button>
														<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
															<span class="caret"></span><span class="sr-only">Toggle Dropdown</span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">All</a></li>
															<li><a href="#">None</a></li>
															<li><a href="#">Read</a></li>
															<li><a href="#">Unread</a></li>
															<li><a href="#">Starred</a></li>
															<li><a href="#">Unstarred</a></li>
														</ul>
													</div>
													<button type="button" class="btn btn-default" data-toggle="tooltip" title="Refresh">
														   <span class="glyphicon glyphicon-refresh"></span>   </button>
													<!-- Single button -->
													<div class="btn-group">
														<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
															More <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Mark all as read</a></li>
															<li class="divider"></li>
															<li class="text-center"><small class="text-muted">Select messages to see more actions</small></li>
														</ul>
													</div>
													<div class="pull-right">
														<span class="text-muted"><b>1</b>–<b>50</b> of <b>277</b></span>
														<div class="btn-group btn-group-sm">
															<button type="button" class="btn btn-default">
																<span class="glyphicon glyphicon-chevron-left"></span>
															</button>
															<button type="button" class="btn btn-default">
																<span class="glyphicon glyphicon-chevron-right"></span>
															</button>
														</div>
													</div>
												</div>
											</div>
											<hr />
											<div class="row">
												<div class="col-sm-3 col-md-2">
													<a href="#" data-toggle="modal" data-target="#compose-email" class="btn btn-danger btn-sm btn-block" role="button">Nuevo</a>
													<hr />
													<ul class="nav nav-pills nav-stacked">
														<li class="active"><a href="#"><span class="badge pull-right">42</span> Entrada </a>
														</li>
														<li><a href="?folder=sent">Enviados</a></li>
														<li><a href="?folder=trash">Eliminados</a></li>
														<li><a href="?folder=draft"><span class="badge pull-right">3</span>Borradores</a></li>
													</ul>
												</div>
												<div class="col-sm-9 col-md-10">
													<!-- Nav tabs -->
													<ul class="nav nav-tabs">
														<li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-inbox">
														</span>Principal</a></li>
														<!--<li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>
															Social</a></li>
														<li><a href="#messages" data-toggle="tab"><span class="glyphicon glyphicon-tags"></span>
															Promotions</a></li>
														<li><a href="#settings" data-toggle="tab"><span class="glyphicon glyphicon-plus no-margin">
														</span></a></li>-->
													</ul>
													<!-- Tab panes -->
													<div class="tab-content">
														<div class="tab-pane fade in active" id="home">
															<div class="list-group">
																<a href="#" class="list-group-item read">
																	<div class="checkbox"><label><input type="checkbox"></label></div>
																	<span class="glyphicon glyphicon-star"></span><span class="name" style="min-width: 120px; display: inline-block;">Bhaumik Patel</span> <span class="">This is big title</span>
																	<span class="text-muted" style="font-size: 11px;">- Hi hello how r u ?</span> <span class="badge">12:10 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip"></span></span>
																</a>
																<a href="#" class="list-group-item read">
																	<div class="checkbox"><label><input type="checkbox"></label></div>
																	<span class="glyphicon glyphicon-star"></span><span class="name" style="min-width: 120px; display: inline-block;">Bhaumik Patel</span> <span class="">This is big title</span>
																	<span class="text-muted" style="font-size: 11px;">- Hi hello how r u ?</span> <span class="badge">12:10 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip"></span></span>
																</a>
															</div>
														</div><!--
														<div class="tab-pane fade in" id="profile">
															<div class="list-group">
																<div class="list-group-item">
																	<span class="text-center">This tab is empty.</span>
																</div>
															</div>
														</div>
														<div class="tab-pane fade in" id="messages">...</div>
														<div class="tab-pane fade in" id="settings">This tab is empty.</div> -->
													</div>
													<!-- Ad -->
													<!--<div class="row-md-12">
														<div class="ad">
															<a href="http://www.jquery2dotnet.com" class="title">jQuery2DotNet</a>
															<div>
																Cool jQuery, CSS3, HTML5, Bootstrap, and MVC tutorial</div>
															<a href="http://www.jquery2dotnet.com" class="url">www.jquery2dotnet.com</a>
														</div>
													</div>-->
												</div>

												
                                <!-- Modal Compose email -->
                                <div class="modal fade none-border" id="compose-email">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Nuevo correo</h4>
                                            </div>
                                            <div class="modal-body p-20">
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Category Name</label>
                                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label">Choose Category Color</label>
                                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                                <option value="success">Success</option>
                                                                <option value="danger">Danger</option>
                                                                <option value="info">Info</option>
                                                                <option value="primary">Primary</option>
                                                                <option value="warning">Warning</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL -->
												
                        </div>
                    </div>
                    <!-- end container -->


<?php
include("../tpl/footer.php");
?>