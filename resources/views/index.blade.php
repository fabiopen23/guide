<div class="title">
    <h2>CADASTROS</h2>
</div>
<div class="row" >
    <div>
        <div class="list_1">
            <h4> Produtos/Serviços</h4>
        </div>
       <ul class="list_2">
        <li> <a href="cad_families_1" data-toggle="modal" data-target="#cad_families_1">Famílias</a></li>
        <li> <a href="cad_warranties_1" data-toggle="modal" data-target="#cad_warranties_1">Garantias</a></li>
        <li> <a href="cad_brands_1" data-toggle="modal" data-target="#cad_brands_1">Marcas</a></li>
        <li> <a href="cad_revisions_1" data-toggle="modal" data-target="#cad_revisions_1">Revisões</a></li>
        <li> <a href="cad_section_1" data-toggle="modal" data-target="#cad_section_1">Seção</a></li>
        <li> <a href="cad_department_1" data-toggle="modal" data-target="#cad_department_1">Departamento</a></li>
        <li> <a href="cad_conversor_1" data-toggle="modal" data-target="#cad_conversor_1">Conversor de CST para CSOSN</a></li>
       </ul>
       @include('registrations.families')
       @include('registrations.warranties')
       @include('registrations.brands')
       @include('registrations.revisions')
       @include('registrations.section')
       @include('registrations.department')
       @include('registrations.conversor')
       @include('registrations.register')
    </div>
    <div>
        <div class="list_1">
            <h4> Fiscal</h4>
        </div>
       <ul class="list_2">
        <li> <a href="cad_cfop_1" data-toggle="modal" data-target="#cad_cfop_1">CFOP</a></li>
        <li> <a href="cad_ncm_1" data-toggle="modal" data-target="#cad_ncm_1">NCM/NBS</a></li>
        <li> <a href="cad_text_1" data-toggle="modal" data-target="#cad_text_1">Texto Para Notas Fiscais</a></li>
        <li> <a href="cad_shipping_1" data-toggle="modal" data-target="#cad_shipping_1">Transportadora</a></li>
        <li> <a href="cad_tax_1" data-toggle="modal" data-target="#cad_tax_1">Tributo por Estado</a></li>
        <li> <a href="cad_cnae_1" data-toggle="modal" data-target="#cad_cnae_1">CNAE</a></li>
        <li> <a href="cad_intermediary_1" data-toggle="modal" data-target="#cad_intermediary_1">Intermediador</a></li>
       </ul>
       @include('registrations.cfop')
       @include('registrations.ncm')
       @include('registrations.text')
       @include('registrations.shipping')
       @include('registrations.tax')
       @include('registrations.cnae')
       @include('registrations.intermediary')
    </div>
    <div>
        <div class="list_1">
            <h4>Vendas</h4>
        </div>
       <ul class="list_2">
        <li> <a href="cad_conditions_1" data-toggle="modal" data-target="#cad_conditions_1">Condição de Pagamento</a></li>
        <li> <a href="cad_forms_1" data-toggle="modal" data-target="#cad_forms_1">Forma de Pagamento</a></li>
        <li> <a href="cad_box_1" data-toggle="modal" data-target="#cad_box_1">Prisma/Box</a></li>
        <li> <a href="cad_discount_1" data-toggle="modal" data-target="#cad_discount_1">Tabela de Preços Diferenciados</a></li>
        <li> <a href="cad_promotional_1" data-toggle="modal" data-target="#cad_promotional_1">Tabela de Preço Promocional</a></li>
        <li> <a href="cad_loss_1" data-toggle="modal" data-target="#cad_loss_1">Motivos de Perda</a></li>
        <li> <a href="cad_trade_1" data-toggle="modal" data-target="#cad_trade_1">Meus Representantes</a></li>
        <li> <a href="cad_approach_1" data-toggle="modal" data-target="#cad_approach_1">Abordagem</a></li>
        <li> <a href="cad_subtype_1" data-toggle="modal" data-target="#cad_subtype_1">Subtipo de Venda</a></li>
       </ul>
       @include('registrations.conditions')
       @include('registrations.forms')
       @include('registrations.box')
       @include('registrations.discount')
       @include('registrations.promotional')
       @include('registrations.loss')
       @include('registrations.trade')
       @include('registrations.approach')
       @include('registrations.subtype')
    </div>
    <div>
        <div class="list_1">
            <h4>Financeiro</h4>
        </div>
       <ul class="list_2">
        <li> <a href="cad_banks_1" data-toggle="modal" data-target="#cad_bank_1">Banco/Caixa</a></li>
        <li> <a href="cad_account_1" data-toggle="modal" data-target="#cad_account_1">Plano de Contas</a></li>
        <li> <a href="cad_cost_1" data-toggle="modal" data-target="#cad_cost_1">Centro de Custo</a></li>
       </ul>
       @include('registrations.banks')
       @include('registrations.account')
       @include('registrations.cost')
    </div>
    <div>
        <div class="list_1">
            <h4>Checklist Personalizado</h4>
        </div>
       <ul class="list_2">
        <li> <a href="cad_checklist_1" data-toggle="modal" data-target="#cad_check_1">Checklist</a></li>
        <li> <a href="cad_defects_1" data-toggle="modal" data-target="#cad_defects_1">Defeitos</a></li>
        <li> <a href="cad_corrections_1" data-toggle="modal" data-target="#cad_corrections_1">Correções</a></li>
        <li> <a href="cad_group_1" data-toggle="modal" data-target="#cad_group_1">Grupos de Itens</a></li>
       </ul>
       @include('registrations.checklist')
       @include('registrations.defects')
       @include('registrations.corrections')
       @include('registrations.group')
    </div>
</div>
<div class="row">
    <div class="col col-md-3"  >
            <div class="title">
                <h2>VENDAS</h2>
            </div>
           <ul class="list_2">
            <li> <a href="sale_1" data-toggle="modal" data-target="#sale_1">Vendas</a></li>
            <li> <a href="sales_pdv_1" data-toggle="modal" data-target="#sales_pdv_1">PDV</a></li>
            <li> <a href="sales_cashier_1" data-toggle="modal" data-target="#sales_cashier_1">Caixa</a></li>
            <li> <a href="sales_schedules_1" data-toggle="modal" data-target="#sales_schedules_1">Agenda</a></li>
            <li> <a href="sales_panel_1" data-toggle="modal" data-target="#sales_panel_1">Painel da Oficina</a></li>
           </ul>
           @include('sales.sale')

    </div>
    <div class="col col-md-3"  >
        <div class="title">
            <h2>CLIENTES</h2>
        </div>
    </div>
    <div class="col col-md-3"  >
        <div class="title">
            <h2>FORNECEDORES</h2>
        </div>
    </div>


</div>









