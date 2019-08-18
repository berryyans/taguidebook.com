<?php

if ($_GET[module]=='' || $_GET[module]=='home' ){

	echo "";
}

else if($_GET[module]=="menu"){

	if($_GET[page]=="list"){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=menu&page=add\">Add</a></li>
					<li><a href=\"?module=menu&page=sorting\">Sorting</a></li>
				</ul>
			  </p>";

	}
	else if($_GET[page]=="sorting"){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=menu&page=list\">List</a></li>
					<li><a href=\"?module=menu&page=add\">Add</a></li>
					<li class=\"active\">Sorting</li>
				</ul>
			  </p>";

	}
	else if($_GET[page]=="add"){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=menu&page=list\">List</a></li>
					<li class=\"active\">Add</li>
					<li><a href=\"?module=menu&page=sorting\">Sorting</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=="update"){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=menu&page=list\">List</a></li>
					<li><a href=\"?module=menu&page=add\">Add</a></li>
					<li class=\"active\"\"?module=menu&page=add\">Update</li>
					<li><a href=\"?module=menu&page=sorting\">Sorting</a></li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='profil'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=profil&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=profil&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=profil&page=list\">List</a></li>
					<li><a href=\"?module=profil&page=add\">Add</a></li>
					<li class=\"active\"\"?module=profil&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='category'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=category&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=category&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=category&page=list\">List</a></li>
					<li><a href=\"?module=category&page=add\">Add</a></li>
					<li class=\"active\"\"?module=category&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='aboutus'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=aboutus&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=aboutus&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=aboutus&page=list\">List</a></li>
					<li><a href=\"?module=aboutus&page=add\">Add</a></li>
					<li class=\"active\"\"?module=aboutus&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='region'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=region&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=region&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=region&page=list\">List</a></li>
					<li><a href=\"?module=region&page=add\">Add</a></li>
					<li class=\"active\"\"?module=region&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='academic'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=academic&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=academic&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=academic&page=list\">List</a></li>
					<li><a href=\"?module=academic&page=add\">Add</a></li>
					<li class=\"active\"\"?module=academic&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='technopreneurship'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=technopreneurship&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=technopreneurship&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=technopreneurship&page=list\">List</a></li>
					<li><a href=\"?module=technopreneurship&page=add\">Add</a></li>
					<li class=\"active\"\"?module=technopreneurship&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='primerslife'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=primerslife&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=primerslife&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=primerslife&page=list\">List</a></li>
					<li><a href=\"?module=primerslife&page=add\">Add</a></li>
					<li class=\"active\"\"?module=primerslife&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='learning'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=learning&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=learning&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=learning&page=list\">List</a></li>
					<li><a href=\"?module=learning&page=add\">Add</a></li>
					<li class=\"active\"\"?module=learning&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='research'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=research&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=research&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=research&page=list\">List</a></li>
					<li><a href=\"?module=research&page=add\">Add</a></li>
					<li class=\"active\"\"?module=research&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='community'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=community&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=community&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=community&page=list\">List</a></li>
					<li><a href=\"?module=community&page=add\">Add</a></li>
					<li class=\"active\"\"?module=community&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='faq'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=faq&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=faq&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=faq&page=list\">List</a></li>
					<li><a href=\"?module=faq&page=add\">Add</a></li>
					<li class=\"active\"\"?module=faq&page=add\">Update</li>
				</ul>
			  </p>";

	}

}



else if($_GET[module]=='testimonial'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=testimonial&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=testimonial&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=testimonial&page=list\">List</a></li>
					<li><a href=\"?module=testimonial&page=add\">Add</a></li>
					<li class=\"active\"\"?module=testimonial&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='selayangpandang'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=selayangpandang&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=selayangpandang&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=selayangpandang&page=list\">List</a></li>
					<li><a href=\"?module=selayangpandang&page=add\">Add</a></li>
					<li class=\"active\"\"?module=selayangpandang&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='pemerintahan'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=pemerintahan&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=pemerintahan&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=pemerintahan&page=list\">List</a></li>
					<li><a href=\"?module=pemerintahan&page=add\">Add</a></li>
					<li class=\"active\"\"?module=pemerintahan&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='profil'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=profil&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=profil&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=profil&page=list\">List</a></li>
					<li><a href=\"?module=profil&page=add\">Add</a></li>
					<li class=\"active\"\"?module=profil&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='kategori'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=kategori&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=kategori&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=kategori&page=list\">List</a></li>
					<li><a href=\"?module=kategori&page=add\">Add</a></li>
					<li class=\"active\"\"?module=kategori&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='informasi'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=informasi&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=informasi&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=informasi&page=list\">List</a></li>
					<li><a href=\"?module=informasi&page=add\">Add</a></li>
					<li class=\"active\"\"?module=informasi&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='katinformasi'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=katinformasi&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=katinformasi&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=katinformasi&page=list\">List</a></li>
					<li><a href=\"?module=katinformasi&page=add\">Add</a></li>
					<li class=\"active\"\"?module=katinformasi&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='subkatinformasi'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=subkatinformasi&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=subkatinformasi&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=subkatinformasi&page=list\">List</a></li>
					<li><a href=\"?module=subkatinformasi&page=add\">Add</a></li>
					<li class=\"active\"\"?module=subkatinformasi&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='prestasi'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=prestasi&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=prestasi&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=prestasi&page=list\">List</a></li>
					<li><a href=\"?module=prestasi&page=add\">Add</a></li>
					<li class=\"active\"\"?module=prestasi&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='instansi'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=instansi&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=instansi&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=instansi&page=list\">List</a></li>
					<li><a href=\"?module=instansi&page=add\">Add</a></li>
					<li class=\"active\"\"?module=instansi&page=add\">Update</li>
				</ul>
			  </p>";

	}

}


else if($_GET[module]=='perda'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=perda&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=perda&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=perda&page=list\">List</a></li>
					<li><a href=\"?module=perda&page=add\">Add</a></li>
					<li class=\"active\"\"?module=perda&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='katperda'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=katperda&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=katperda&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=katperda&page=list\">List</a></li>
					<li><a href=\"?module=katperda&page=add\">Add</a></li>
					<li class=\"active\"\"?module=katperda&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='keuangan'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=keuangan&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=keuangan&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=keuangan&page=list\">List</a></li>
					<li><a href=\"?module=keuangan&page=add\">Add</a></li>
					<li class=\"active\"\"?module=keuangan&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='katkeuangan'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=katkeuangan&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=katkeuangan&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=katkeuangan&page=list\">List</a></li>
					<li><a href=\"?module=katkeuangan&page=add\">Add</a></li>
					<li class=\"active\"\"?module=katkeuangan&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='tahunkeuangan'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=tahunkeuangan&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=tahunkeuangan&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=tahunkeuangan&page=list\">List</a></li>
					<li><a href=\"?module=tahunkeuangan&page=add\">Add</a></li>
					<li class=\"active\"\"?module=tahunkeuangan&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='dasarhukum'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=dasarhukum&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=dasarhukum&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=dasarhukum&page=list\">List</a></li>
					<li><a href=\"?module=dasarhukum&page=add\">Add</a></li>
					<li class=\"active\"\"?module=dasarhukum&page=add\">Update</li>
				</ul>
			  </p>";

	}

}


else if($_GET[module]=='posting'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=posting&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=posting&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=posting&page=list\">List</a></li>
					<li><a href=\"?module=posting&page=add\">Add</a></li>
					<li class=\"active\"\"?module=posting&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='agenda'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=agenda&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=agenda&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=agenda&page=list\">List</a></li>
					<li><a href=\"?module=agenda&page=add\">Add</a></li>
					<li class=\"active\"\"?module=agenda&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='event'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=event&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=event&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=event&page=list\">List</a></li>
					<li><a href=\"?module=event&page=add\">Add</a></li>
					<li class=\"active\"\"?module=event&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='senibudaya'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=senibudaya&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=senibudaya&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=senibudaya&page=list\">List</a></li>
					<li><a href=\"?module=senibudaya&page=add\">Add</a></li>
					<li class=\"active\"\"?module=senibudaya&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='bankdata'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=bankdata&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=bankdata&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=bankdata&page=list\">List</a></li>
					<li><a href=\"?module=bankdata&page=add\">Add</a></li>
					<li class=\"active\"\"?module=bankdata&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='esewaka'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=esewaka&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=esewaka&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=esewaka&page=list\">List</a></li>
					<li><a href=\"?module=esewaka&page=add\">Add</a></li>
					<li class=\"active\"\"?module=esewaka&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='senibudaya'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=senibudaya&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=senibudaya&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=senibudaya&page=list\">List</a></li>
					<li><a href=\"?module=senibudaya&page=add\">Add</a></li>
					<li class=\"active\"\"?module=senibudaya&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='ecommerce'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=ecommerce&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=ecommerce&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=ecommerce&page=list\">List</a></li>
					<li><a href=\"?module=ecommerce&page=add\">Add</a></li>
					<li class=\"active\"\"?module=ecommerce&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='procurement'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=procurement&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=procurement&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=procurement&page=list\">List</a></li>
					<li><a href=\"?module=procurement&page=add\">Add</a></li>
					<li class=\"active\"\"?module=procurement&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='info'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=info&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=info&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=info&page=list\">List</a></li>
					<li><a href=\"?module=info&page=add\">Add</a></li>
					<li class=\"active\"\"?module=info&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='album'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=album&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=album&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=album&page=list\">List</a></li>
					<li><a href=\"?module=album&page=add\">Add</a></li>
					<li class=\"active\"\"?module=album&page=add\">Update</li>
				</ul>
			  </p>";

	}
	
	else if($_GET[page]=='listgallery'){
		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List Gallery</a></li>
					<li><a href=\"?module=album&page=addgallery&kode_album=$_GET[kode_album]&nama_album=$_GET[nama_album]\">Add Gallery</a></li>
					<li><a href=\"?module=album&page=list\">Kembali Ke Album</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='addgallery'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=album&page=listgallery&kode_album=$_GET[kode_album]&nama_album=$_GET[nama_album]\">List Gallery</a></li>
					<li class=\"active\">Add Gallery</li>
					<li><a href=\"?module=album&page=list\">Kembali Ke Album</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='updategallery'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=album&page=listgallery&kode_album=$_GET[kode_album]&nama_album=$_GET[nama_album]\">List Gallery</a></li>
					<li><a href=\"?module=album&page=addgallery&kode_album=$_GET[kode_album]&nama_album=$_GET[nama_album]\">Add Gallery</a></li>
					<li class=\"active\">Update Gallery</a></li>
				</ul>
			  </p>";
    }

}

else if($_GET[module]=='video'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=video&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=video&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=video&page=list\">List</a></li>
					<li><a href=\"?module=video&page=add\">Add</a></li>
					<li class=\"active\"\"?module=video&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='caricature'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=caricature&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=caricature&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=caricature&page=list\">List</a></li>
					<li><a href=\"?module=caricature&page=add\">Add</a></li>
					<li class=\"active\"\"?module=caricature&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='runtext'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=runtext&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=runtext&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=runtext&page=list\">List</a></li>
					<li><a href=\"?module=runtext&page=add\">Add</a></li>
					<li class=\"active\"\"?module=runtext&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='popup'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=popup&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=popup&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=popup&page=list\">List</a></li>
					<li><a href=\"?module=popup&page=add\">Add</a></li>
					<li class=\"active\"\"?module=popup&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='situsterkait'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=situsterkait&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=situsterkait&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=situsterkait&page=list\">List</a></li>
					<li><a href=\"?module=situsterkait&page=add\">Add</a></li>
					<li class=\"active\"\"?module=situsterkait&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='buku'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=buku&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=buku&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=buku&page=list\">List</a></li>
					<li><a href=\"?module=buku&page=add\">Add</a></li>
					<li class=\"active\"\"?module=buku&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='category_directory'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=category_directory&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=category_directory&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=category_directory&page=list\">List</a></li>
					<li><a href=\"?module=category_directory&page=add\">Add</a></li>
					<li class=\"active\"\"?module=category_directory&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='directory'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=directory&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=directory&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=directory&page=list\">List</a></li>
					<li><a href=\"?module=directory&page=add\">Add</a></li>
					<li class=\"active\"\"?module=directory&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='banner'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=banner&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=banner&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=banner&page=list\">List</a></li>
					<li><a href=\"?module=banner&page=add\">Add</a></li>
					<li class=\"active\"\"?module=banner&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='polling'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=polling&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=polling&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=polling&page=list\">List</a></li>
					<li><a href=\"?module=polling&page=add\">Add</a></li>
					<li class=\"active\"\"?module=polling&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='user'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=user&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=user&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=user&page=list\">List</a></li>
					<li><a href=\"?module=user&page=add\">Add</a></li>
					<li class=\"active\"\"?module=user&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='email_contact'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=email_contact&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=email_contact&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=email_contact&page=list\">List</a></li>
					<li><a href=\"?module=email_contact&page=add\">Add</a></li>
					<li class=\"active\"\"?module=email_contact&page=add\">Update</li>
				</ul>
			  </p>";

	}

}

else if($_GET[module]=='social_media'){

	if($_GET[page]=='list'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li class=\"active\">List</li>
					<li><a href=\"?module=social_media&page=add\">Add</a></li>
				</ul>
			  </p>";

	}else if($_GET[page]=='add'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=social_media&page=list\">List</a></li>
					<li class=\"active\">Add</li>
				</ul>
			  </p>";

	}else if($_GET[page]=='update'){

		echo "<p>
				<ul class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
					<li><a href=\"?module=social_media&page=list\">List</a></li>
					<li><a href=\"?module=social_media&page=add\">Add</a></li>
					<li class=\"active\"\"?module=social_media&page=add\">Update</li>
				</ul>
			  </p>";

	}

}
?>