<?php

//funcao recursiva

//criando array bidimensional
$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			//inicio: Diretor Comecial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//inicio: Gerente de Vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
					//Termino: Gerente de Venda
				)
			),

			//Termino: Diretor Comecial

			
			//inicio: Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					//inicio: gerente de contas a pagar
					array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordinados'=>array(
 						//inicio supervisor de pagamentos
							array(
								'nome_cargo'=>'Supervisor de Pagamentos'
							)
						//termino: supervisor de pagamentos
						)
					),
					//Termino: Gerente de Contas a pagar
					//Inicio; Gerente de Compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=>array(
							//Inicio: Supervisor de Suprimentos
							array(
									'nome_cargo'=>'Supervisor de Suprimentos',
									'subordinados'=>array(

											array(
													'nome_cargo'=>'Funcionário'

												)

										)
						
							)
							//Termino: Supervisor de Suprimentos
						)
					)
					//Termino: Gerente de Compras
				)
			)
			//Termino: Diretor Financeir
		)
			
	)
);



//funcao recursiva

function exibe($cargos) {

$html = "<ul>";

	foreach ($cargos as $cargo) {
		$html .= "<li>";
		$html .= $cargo['nome_cargo'];

		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
		$html .= exibe($cargo['subordinados']);
		}

		$html .= "</li>";
	


	}

$html .= "</ul>";

return $html;


}


echo exibe($hierarquia);



?>