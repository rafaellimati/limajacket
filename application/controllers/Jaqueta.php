<div class='Jaqueta'>
	<?php
	//Criando a exibição do produto.
	echo heading($item->nome,3);
	echo "<p>";
		$propriedades = array(
		    'src' => 'produtos/'.$item->foto,
		    'alt' => $item->nome,
		    'class' => 'foto'
		);
		echo img($propriedades);	
		echo $item->descricao;	
	echo "</p>";	
	echo heading( "R$" . number_format($item->preco,2,",",".") ,4);
	
	//Criando o formulário do carrinho de compras.
	$attributos = array('id' => 'form_add_carrinho');
	$campos_hidden = array(
		'id' => $item->id_produto,
       	'price' => $item->preco,
       	'name' => $item->nome,
	);
	echo form_open(base_url('carrinho/adicionar_item'), $attributos, $campos_hidden);		
		echo form_fieldset("Comprar");
		echo form_label("Quantidade: ","qty");
		echo form_input('qty',1);
		echo form_submit("btn_comprar","Adicionar ao Carrinho");
		echo form_fieldset_close();
	echo form_close();
	?>
</div>