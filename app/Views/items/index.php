<div class="input-group" class="container row-4 md col-5">
<div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">

<div class="container col-2">
<h3>PENJUALAN</h3>
</div>



<table class= "table table-bordered table-hover"> 
<div class="input-group">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <button type="button" class="btn btn-success">search</button>
</div>
</form>
<div class="wrapper-editor">

<div class="row d-flex justify-content-center modalWrapper">
  <div class="modal fade addNewInputs" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAdd"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body col-1">
          <div class="md-form mb-5">
            <input type="text" id="inputNO" class="form-control validate">
            <label data-error="wrong" data-success="right" for="inputNO">NO</label>
          </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <input type="text" id="inputKODETIKET" class="form-control validate">
            <label data-error="wrong" data-success="right" for="inputKODETIKET">KODE TIKET</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="inputNAMATIKET" class="form-control validate">
            <label data-error="wrong" data-success="right" for="inputNAMATIKET">NAMA TIKET</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="inputJENISTIKET" class="form-control validate">
            <label data-error="wrong" data-success="right" for="inputJENISTIKET">JENIS TIKET</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="inputHARGA" class="form-control validate">
            <label data-error="wrong" data-success="right" for="inputHARGA">HARGA</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="inputSalary" class="form-control validate">
            <label data-error="wrong" data-success="right" for="inputNAMA KASIR">NAMA KASIR</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="inputSalary" class="form-control validate">
            <label data-error="wrong" data-success="right" for="inputTANGGAL">TANGGAL</label>
          </div>

          
          <div class="md-form mb-5">
            <input type="date" id="inputDate" class="form-control" placeholder="Select Date">
            <label data-error="wrong" data-success="right" for="inputDate"></label>
          </div>

        </div>
        <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
          <button class="btn btn-outline-primary btn-block buttonAdd" data-dismiss="modal">Add form
            <i class="fas fa-paper-plane-o ml-1"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center">
    <a href="" class="btn btn-info btn-rounded btn-sm" data-toggle="modal" data-target="#modalAdd">Add<i
        class="fas fa-plus-square ml-1"></i></a>
  </div>

  <div class="modal fade modalEditClass" id="modalEdit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold text-secondary ml-5">Edit form</h4>
          <button type="button" class="close text-secondary" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <input type="text" id="formNOEdit" class="form-control validate">
            <label data-error="wrong" data-success="right" for="formNOEdit">NO</label>
          </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <input type="text" id="formKODETIKETEdit" class="form-control validate">
            <label data-error="wrong" data-success="right" for="formNameEdit">KODE TIKET</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="formNAMATIKETEdit" class="form-control validate">
            <label data-error="wrong" data-success="right" for="formPositionEdit">NAMA TIKET</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="formJENISTIKETEdit" class="form-control validate">
            <label data-error="wrong" data-success="right" for="formOfficeEdit">JENISTIKET</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="formHARGAEdit" class="form-control validate">
            <label data-error="wrong" data-success="right" for="formHARGAEdit">HARGA</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="formNAMAKASIREdit" class="form-control datepicker">
            <label data-error="wrong" data-success="right" for="formNAMAKASIREdit">NAMA KASIR</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="formTANGGALEdit" class="form-control validate">
            <label data-error="wrong" data-success="right" for="formTANGGALEdit">TANGGAL</label>
          </div>


        </div>
        <div class="modal-footer d-flex justify-content-center editInsideWrapper">
          <button class="btn btn-outline-secondary btn-block editInside" data-dismiss="modal">Edit
            form
            <i class="fas fa-paper-plane-o ml-1"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center buttonEditWrapper">
    <button class="btn btn-info btn-rounded btn-sm buttonEdit" data-toggle="modal" data-target="#modalEdit"
      disabled>Edit<i class="fas fa-pencil-square-o ml-1"></i></a>
  </div>

  <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDelete"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold ml-5 text-danger">Delete</h4>
          <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <p class="text-center h4">Are you sure to delete selected row?</p>

        </div>
        <div class="modal-footer d-flex justify-content-center deleteButtonsWrapper">
          <button type="button" class="btn btn-danger btnYesClass" id="btnYes" data-dismiss="modal">Yes</button>
          <button type="button" class="btn btn-primary btnNoClass" id="btnNo" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center">
    <button class="btn btn-danger btn-sm btn-rounded buttonDelete" data-toggle="modal" disabled data-target="#modalDelete"
      disabled>Delete<i class="fas fa-times ml-1"></i></a>
  </div>
</div>

<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
    <th class="th-sm">NO

</th>
      <th class="th-sm">KODE TIKET

      </th>
      <th class="th-sm">NAMA TIKET

      </th>
      <th class="th-sm">JENIS TIKET

      </th>
      <th class="th-sm">HARGA

      </th>
      <th class="th-sm">NAMA KASIR

      </th>
      <th class="th-sm">TANGGAL

      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>ALAS0913-01-PLAT</td>
      <td>LC-ARI LASSO</td>
      <td>PLATINUM</td>
      <td>Rp.1,000,000</td>
      <td>GUNANTA.G</td>
      <td>13-07-2022,12:05</td>
    </tr>
    <tr>
      <td>2</td>
      <td>RASA0913-02-PLAT</td>
      <td>LC-RAISA</td>
      <td>PLATINUM</td>
      <td>Rp.1,215,000</td>
      <td>GUNANTA.G</td>
      <td>13-07-2022,12:05</td>
    </tr>
    <tr>
      <td>3</td>
      <td>UDA0913-03-GOLD</td>
      <td>LC-JUDIKA</td>
      <td>GOLD</td>
      <td>Rp.535,000</td>
      <td>GUNANTA.G</td>
      <td>13-07-2022,12:05</td>
    </tr>
    <tr>
      <td>4</td>
      <td>NAH0913-04-SIL</td>
      <td>LC-NOAH</td>
      <td>SILVER</td>
      <td>Rp.358,000</td>
      <td>GUNANTA.G</td>
      <td>13-07-2022,12:29</td>
    </tr>
    <tr>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
    </tr>
    <tr>
      <td>86</td>
      <td>ALAS0913-25-SIL</td>
      <td>LC-ARI LASSO</td>
      <td>SILVER</td>
      <td>Rp.347,000</td>
      <td>TOGA.S</td>
      <td>15-07-2022,11:45</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th>TOTAL TERJUAL
      </th>
      <th>86
      </th>
      <th>TOTAL PEMASUKAN
      </th>
      <th>Rp.180,750,000
      </th>
    </tr>
  </tfoot>
</table>
</div>