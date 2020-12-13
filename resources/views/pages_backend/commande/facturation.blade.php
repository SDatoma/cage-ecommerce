@extends('header/header_back')

<!-- Main Content -->
@section('content')


<style>

*{
	margin:0px;
	padding:0px;
}
body {
	margin:0px;
	padding:0px;
	/*background:#FFFFFF;
	background-repeat:repeat-x;*/
	width:100%;
	font-family:Calibri;
	font-size:13px;
	color:#666666;
	background-color:#EDEEEE;
	background-image:url(../images/motifgb2.jpg);
	background-attachment: fixed;
}

input,select
{
	background-color:#888888;
	color:#EDEEEE;
	font-family:Calibri;
	font-size:1vw;
	padding-left:0.5vw;
	padding-right:0.5vw;
	width:80%;
	height:25px;
	border:#333 1px solid;
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
	box-shadow: 2px 2px 0px #aaa;	
}

input[type="button"]
{
	font-weight:bold;
	font-size:1.5vw;
	height:35px;
	background-color:#666666;
}

input:hover
{
	background-color:#a23538;
	cursor:pointer;
}

select:hover
{
	background-color:#a23538;
	cursor:pointer;
}

h1
{
	font-size:24px;
	font-weight:bold;
	margin-bottom:10px;
}

h2
{
	font-size:18px;
	font-weight:bold;
	/*margin-bottom:5px;*/
}

img
{
	margin-top:5px;
	margin-bottom:5px;
}

a:link {
    color:#666666;
	text-decoration:none;
}
a:visited {
    color:#666666;
	text-decoration:none;
}
a:hover {
    color:#666666;
	text-decoration:none;
}
a:active {
    color:#666666;
	text-decoration:none;
}

.bord
{
	float:left;
	width:5%;
	height:25px;
}

.suite
{
	width:15%;
	height:25px;
	float:left;
	font-size:16px;
	font-weight:normal;
	text-align:left;
}

.des
{
	width:30%;
	height:25px;
	float:left;
	font-size:16px;
	font-weight:normal;
	text-align:left;
	overflow:hidden;
}

.prix
{
	width:15%;
	height:25px;
	float:left;
	font-size:16px;
	font-weight:normal;
	text-align:right;
}

.div_imc
{
	float:left;
	height:55px;
	text-align:center;
	padding-top:45px;
	font-size:16px;
	font-weight:bold;
	color:#FFFFFF;
	border-top:#666666 2px solid;
	border-bottom:#666666 2px solid;
}

.div_imc_ind
{
	float:left;
	width:4%;
	height:10px;
	text-align:center;
}

.div_tranche1
{
	background-color:#366f50;
}

.div_tranche2
{
	background-color:#666666;
}

.div_tranche3
{
	background-color:#a23538;
}

.div_conteneur_parent
{
	width:100%;
	height:auto;
	text-align:center;
}

.div_conteneur_page
{
	margin-top:5px;
	width:80%;
	text-align:left;
	border:#666666 1px solid;
	height:auto;
	display:inline-block;
	background-color:#FFFFFF;
	background-image:url(../images/textpap4.jpg);
	border:#333 1px solid;
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;		
}

.titre_h1
{
	width:auto;
	display:block;
	height:auto;
	text-align:center;
	background-color:#EDEEEE;
	border:#666666 1px solid;
	padding-top:20px;
	padding-bottom:8px;
	border:#333 1px solid;
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;		
}

#cadre1
{
	width:auto;
	height:100px;
	display:block;
	position:relative;
	background-color:#EDEEEE;
	border:#666666 1px solid;
	padding-top:12px;
	border:#333 1px solid;
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;		
}

#cadre2
{
	width:auto;
	height:100px;
	display:block;
	position:relative;
	background-color:#EDEEEE;
	border:#666666 1px solid;
	padding-top:12px;
	border:#333 1px solid;
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;		
}

.titre_page
{
	width:auto;
	padding-top:18px;
	height:42px;
	font-family:Calibri;
	color:#FFFFFF;
	text-align:right;
	background-image:url(../images/bg-tech-std.png);
	background-repeat:no-repeat;
	background-color:#666666;
	padding-right:10px;
	border:#333 1px solid;
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;	
}

.pied_page
{
	float:left;
	width:100%;
	padding-bottom:6px;
	height:42px;
	background-color:#666666;
	border:#333 1px solid;
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;	
}

.div_saut_ligne
{
	width:100%;
	height:5px;
	display:inline-block;
}

.div_int_page
{
	width:100%;
	float:left;
	padding-left:15px;
	padding-right:15px;
	padding-bottom:15px;
	padding-top:5px;
	height:auto;
	font-size:14px;
	font-family:Calibri;
	color:#666666;
	text-align:left;
}

</style>


<section class="content">
    <div class="body_scroll">
       
    <script language='javascript' type="text/javascript">
function recolter()
{
	document.getElementById("formulaire").request({
		onComplete:function(transport){
			switch(document.getElementById('param').value)
			{
				case 'recup_client':
					var tab_info = transport.responseText.split('|');
					document.getElementById('civilite').value = tab_info[0];
					document.getElementById('nom_client').value = tab_info[1];
					document.getElementById('prenom_client').value = tab_info[2];			
				break;
				
				case 'recup_article':
					var tab_info = transport.responseText.split('|');
					document.getElementById('designation').value = tab_info[0];
					document.getElementById('puht').value = tab_info[1];
					document.getElementById('qte').value = tab_info[2];					
				break;
				
				case 'creer_client':
					var rep = transport.responseText;
					if(rep=="nok")
						alert("Le client existe déjà");
					else
					{
						var liste = document.getElementById("ref_client");
						var option = document.createElement("option");
						option.value = rep;
						option.text = rep;
						liste.add(option);
						liste.selectedIndex = liste.length-1;						
					}
				break;	

				case 'facturer':
					if(transport.responseText=="ok")
						alert("La facture a été validée avec succès");
					else
						alert("Une erreur est survenue");
				break;					
				
			}	
		}
	});
}
</script>
			<div style="width:100%;display:block;text-align:center;">
			</div>
			
			<div class="div_saut_ligne" style="height:30px;">
			</div>						
			
			<div style="float:left;width:10%;height:40px;"></div>
			<div style="float:left;width:80%;height:auto;text-align:center;">
			<div class="titre_h1">
			<h1>Facturation Clients </h1>
			</div>
			</div>
			<div style="float:left;width:10%;height:40px;"></div>
			
			<div class="div_saut_ligne" style="height:30px;">
			</div>
			
			<div style="float:left;width:10%;height:350px;"></div>
			<div style="float:left;width:80%;height:350px;text-align:center;">
			<form id="formulaire" name="formulaire" method="post" action="rep_facture.php">
				<div class="titre_h1" style="height:350px;">
				
				<div style="width:10%;height:50px;float:left;"></div>
				<div style="width:80%;height:50px;float:left;font-size:20px;font-weight:bold;text-align:left;color:#a13638;">
						<u>Ajout des produits commandés</u><br/>
					</div>
					<div style="width:10%;height:50px;float:left;"></div>	
					
					<div style="width:10%;height:75px;float:left;"></div>
					<div style="width:15%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Réf. Produit :<br />
						<select id="ref_produit" name="ref_produit" onchange="document.getElementById('param').value='recup_article';recolter();">
							<option value="0">Réf. produit</option>
							<?php 
								 $produits =\App\Models\Produit::where(['etat_produit' =>1])->get();
                              ?>
                            @foreach($produits as $produit)
                            <option value="{{$produit->id_produit}}">{{$produit->nom_produit}}</option>
                            @endforeach						
							?>
						</select>
					</div>
					<div style="width:15%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Qté en stock :<br />
						<input type="text" id="qte" name="qte" disabled style="text-align:right;" />
					</div>
					<div style="width:25%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Désignation du produit :<br />
						<input type="text" id="designation" name="designation" disabled />
					</div>
					<div style="width:25%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Prix unitaire HT :<br />
						<input type="text" id="puht" name="puht" disabled style="text-align:right;" />
					</div>		
					<div style="width:10%;height:75px;float:left;"></div>				

			<div class="div_saut_ligne" style="height:30px;">
			</div>

					<div style="width:10%;height:75px;float:left;"></div>
					<div style="width:15%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Qté commandée :<br />
						<input type="text" id="qte_commande" name="qte_commande" />
					</div>
					<div style="width:15%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Total commande :<br />
						<input type="text" id="total_commande" name="total_commande" disabled />
					</div>
					<div style="width:25%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						<input type="button" id="ajouter" name="ajouter" value="Ajouter" style="margin-top:10px;" onclick="plus_com();" /><br />
						<input type="text" id="param" name="param" style="visibility:hidden;" />
					</div>
					<div style="width:25%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						<input type="button" id="valider" name="valider" value="Valider" style="margin-top:10px;" onclick="document.getElementById('param').value='facturer';recolter();"/><br />
						<input type="text" id="chaine_com" name="chaine_com" style="visibility:hidden;" />
						<input type="text" id="total_com" name="total_com" style="visibility:hidden;" />						
					</div>			
					<div style="width:10%;height:75px;float:left;"></div>			
									
					
				</div>
			</form>
			</div>
			<div style="float:left;width:10%;height:350px;"></div>	

			<div class="div_saut_ligne" style="height:50px;">
			</div>						
			
			<div style="float:left;width:10%;height:25px;"></div>
			<div style="float:left;width:80%;height:auto;text-align:center;">
				<div class="titre_h1" style="float:left;height:auto;width:100%;">
					<div style="float:left;width:5%;height:25px;"></div>
					<div style="width:15%;height:25px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Réf.
					</div>
					<div style="width:15%;height:25px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Qté
					</div>
					<div style="width:30%;height:25px;float:left;font-size:16px;font-weight:bold;text-align:left;overflow:hidden;">
						Désignation du produit
					</div>
					<div style="width:15%;height:25px;float:left;font-size:16px;font-weight:bold;text-align:right;">
						PUHT
					</div>
					<div style="width:15%;height:25px;float:left;font-size:16px;font-weight:bold;text-align:right;">
						PTHT
					</div>
					<div style="float:left;width:5%;height:25px;"></div>
					
					<div style="float:left;width:100%;height:auto;" id="det_com">
						<div class="bord"></div>
						<div class="suite">
							B001
						</div>
						<div class="suite">
							125
						</div>
						<div class="des">
							Chaise roulante pour bureau d'entreprise
						</div>
						<div class="prix">
							125.25
						</div>
						<div class="prix" style="font-weight:bold;">
							1243.75
						</div>
						<div class="bord"></div>						
						
					</div>		
					
				</div>
			</div>
			<div style="float:left;width:10%;height:auto;"></div>	
			
			<div class="div_saut_ligne" style="height:30px;">
			</div>
<script language='javascript' type="text/javascript">
	
	var tot_com = 0;
	
	function plus_com()
	{
		if(ref_client.value != 0 && ref_produit.value != 0 && qte_commande.value != "0" && qte_commande.value != "")
		{
			if(parseInt(qte_commande.value) > parseInt(qte.value))
				alert("La quantité en stock n'est pas suffisante pour honorer la commande");
			else
			{
				var ref_p = ref_produit.value;
				var qte_p = qte_commande.value;
				var des_p = designation.value;
				var pht_p = puht.value;
				
				tot_com = tot_com + qte_p*pht_p;
				total_commande.value = tot_com.toFixed(2);
				total_com.value = total_commande.value;
				chaine_com.value += "|" + ref_p + ";" + qte_p + ";" + des_p + ";" + pht_p;				
				facture();
			}
		}
	}
	
	function facture()
	{		
		var tab_com = chaine_com.value.split('|');
		var nb_lignes = tab_com.length;
		document.getElementById("det_com").innerHTML = "";
		for (ligne=0; ligne<nb_lignes; ligne++)
		{
			if(tab_com[ligne]!="")
			{
				var ligne_com = tab_com[ligne].split(';');
				document.getElementById("det_com").innerHTML += "<div class='bord'></div>";
				document.getElementById("det_com").innerHTML += "<div class='suite'>" + ligne_com[0] + "</div>";
				document.getElementById("det_com").innerHTML += "<div class='suite'>" + ligne_com[1] + "</div>";
				document.getElementById("det_com").innerHTML += "<div class='des'>" + ligne_com[2] + "</div>";
				document.getElementById("det_com").innerHTML += "<div class='prix'>" + ligne_com[3] + "</div>";
				document.getElementById("det_com").innerHTML += "<div class='prix'>" + (ligne_com[1]*ligne_com[3]).toFixed(2) + "</div>";
				document.getElementById("det_com").innerHTML += "<div class='bord'></div>";											
			}
		}		
	}
	
</script>	

    </div>
</section>

@endsection()
