<?php 
function total_debitos_cliente($id_cliente) {} 
function registra_venda($id_cliente, $data) {} 
function registra_venda_item($id_venda, $item) {} 
function consulta_estoque($produto) {} 
function consulta_valor($produto) {} 
function gera_financeiro($id_cliente, $total, $parcelas) {} 

function conclui_venda($id_cliente, $parcelas, $itens) 
{ 
    if (total_debitos_cliente($id_cliente) > 0) { 
        return FALSE; 
    } 
    $id_venda = registra_venda( $id_cliente, date('Y-m-d') ); 
    
    if ($itens) { 
        $total = 0; 
        foreach ($itens as $item) { 
            if (consulta_estoque($item) <= 0) { 
                return FALSE; 
            } 
            $total += consulta_valor($item); 
            registra_venda_item( $id_venda, $item ); 
        } 
    } 
    gera_financeiro( $id_cliente, $total, $parcelas); 
} 
conclui_venda(5, 5, array(1,2,3));