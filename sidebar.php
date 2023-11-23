<div class="span3">
					<div class="sidebar">


<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Order Management
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="todays-orde.php">
											<i class="icon-tasks"></i>
											Les commandes du jour
  <?php
  $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
 $result = mysqli_query($con,"SELECT * FROM Orde where orderDate Between '$from' and '$to'");
$num_rows1 = mysqli_num_rows($result);
{
?>
											<b class="label orange pull-right"><?php echo htmlentities($num_rows1); ?></b>
											<?php } ?>
										</a>
									</li>
									<li>
										<a href="pending-orde.php">
											<i class="icon-tasks"></i>
											Les ordres en attente
										<?php	
	$status='Delivered';									 
$ret = mysqli_query($con,"SELECT * FROM Orde where ordetatus!='$status' || ordetatus is null ");
$num = mysqli_num_rows($ret);
{?><b class="label orange pull-right"><?php echo htmlentities($num); ?></b>
<?php } ?>
										</a>
									</li>
									<li>
										<a href="delivered-orde.php">
											<i class="icon-inbox"></i>
											Commandes livrées
								<?php	
	$status='Delivered';									 
$rt = mysqli_query($con,"SELECT * FROM Orde where ordetatus='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>

										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="manage-use.php">
									<i class="menu-icon icon-group"></i>
									Gérer les utilisateu
								</a>
							</li>
						</ul>


						<ul class="widget widget-menu unstyled">
                                <li><a href="category.php"><i class="menu-icon icon-tasks"></i> Crée une Categorie </a></li>
                                <li><a href="subcategory.php"><i class="menu-icon icon-tasks"></i>Sous Categorie </a></li>
                                <li><a href="insert-product.php"><i class="menu-icon icon-paste"></i>Inserer Produit </a></li>
                                <li><a href="manage-products.php"><i class="menu-icon icon-table"></i>Gérer les produits </a></li>
                        
                            </ul>

						<ul class="widget widget-menu unstyled">
							<li><a href="user-logs.php"><i class="menu-icon icon-tasks"></i>Journal de connexion de l'utilisateur </a></li>
							
							<li>
								<a href="logout.php">
									<i class="menu-icon icon-signout"></i>
									Se déconnecter
								</a>
							</li>
						</ul>

					</div>
				</div>
