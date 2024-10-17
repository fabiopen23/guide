

<div class="col-md-12">
    <div class="modal fade" id="cad_finan">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <img name="cad_finan" src="storage/images/cad_financial/cad_finan.png" width="1150px"  height="680px" id="cad_finan" usemap="#m_cad_finan" alt="" />
                  <map name="m_cad_finan" id="m_cad_finan">
                  <area shape="rect" coords="334,274,470,304" href="cad_banks_4" data-toggle="modal" data-target="#cad_bank_4" alt=""/>
                  <area shape="rect" coords="334,313,470,343" href="cad_account_4" data-toggle="modal" data-target="#cad_account_4" alt=""/>
                  <area shape="rect" coords="334,352,470,382" href="cad_cost_4" data-toggle="modal" data-target="#cad_cost_4" alt=""/>
                  </map>
            </div>
        </div>
    </div>
    @include('registrations.banks')
    @include('registrations.account')
    @include('registrations.cost')

</div>

