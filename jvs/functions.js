
$(document).ready(function () {
  (function ($) {
    $('#source').hide();
    $('#filtrar').keyup(function () {
      var rex = new RegExp($(this).val(), 'i');
      $('.buscar tr').hide();
      $('#source').show();
      $('.buscar tr').filter(function () {
        return rex.test($(this).text());
      }).show();
    })
  }(jQuery));
});

function add(button) {
  var row = button.parentNode.parentNode;
  var cells = row.querySelectorAll('td:not(:last-of-type)');
  addToCartTable(cells);
}

function remove() {
  var row = this.parentNode.parentNode;
    document.querySelector('#target tbody')
            .removeChild(row);
}

function addToCartTable(cells) {
   var id = cells[0].innerText;
   var sust = cells[1].innerText;
   var pres = cells[2].innerText;
   var dosis = cells[3].innerText;

  
   var newRow = document.createElement('tr');
   newRow.appendChild(createCell(id));
   newRow.appendChild(createCell(sust));
   newRow.appendChild(createCell(pres));
   var cellInputQty = createCell();
   cellInputQty.appendChild(createInputQty());
   newRow.appendChild(cellInputQty);
   var cellInputQty = createCell();
   cellInputQty.appendChild(createInputQty());
   newRow.appendChild(cellInputQty);
   var cellInputQty = createCell();
   cellInputQty.appendChild(createInputQty());
   newRow.appendChild(cellInputQty);
   var cellInputQty = createCell();
   cellInputQty.appendChild(createInputQty());
   newRow.appendChild(cellInputQty);
   var cellRemoveBtn = createCell();
   cellRemoveBtn.appendChild(createRemoveBtn())
   newRow.appendChild(cellRemoveBtn);
   
   document.querySelector('#target tbody').appendChild(newRow);
}

function createInputQty() {
  var inputQty = document.createElement('input');
  inputQty.type = 'text';
  inputQty.required = 'true';
  inputQty.min = 1;
  inputQty.className ='form-control';
  return inputQty;
}

function createRemoveBtn() {
  var btnRemove = document.createElement('button');
  btnRemove.className = 'btneli';
  btnRemove.onclick = remove;
  btnRemove.innerText = '';
  return btnRemove;
}

function createCell(text) {
  var td = document.createElement('td');
  if(text) {
    td.innerText = text;
  }
  return td;
}


function savePurchase(e) {
    var form = e.target;
    /*var igv = form.querySelector('#igv');
    var subtotal = form.querySelector('#total');
    var total = form.querySelector('#totaltotal'); */
    var products = {};
    var rows = null;
    var QTY_INDEXI = 1;
    var QTY_INDEXD = 4; // índice de la celda cantidad
    var QTY_INDEXP = 5;
    var QTY_INDEXU = 6;
    var QTY_INDEXN = 7;

    rows = document.getElementById('target')
                .querySelectorAll('tr');
    // recorre todas las filas para obtener
    // los ids  de los productos a comprar
    rows.forEach(function(row) {
        var productId = row.querySelector(':nth-child('+ QTY_INDEXI + ')');

        var qtyCellD = row.querySelector(':nth-child('+ QTY_INDEXD + ')');
        var qtyInputD = qtyCellD.querySelector('input');

        var qtyCellP = row.querySelector(':nth-child('+ QTY_INDEXP + ')');
        var qtyInputP = qtyCellP.innerText('input');

        var qtyCellU = row.querySelector(':nth-child('+ QTY_INDEXU + ')');
        var qtyInputU = qtyCellU.querySelector('input');

        var qtyCellN = row.querySelector(':nth-child('+ QTY_INDEXN + ')');
        var qtyInputN = qtyCellN.querySelector('input');

        if (qtyInputD != null){
          console.log(qtyInputD.value);
        }

        if (qtyInputP != null){
          console.log(qtyInputP.value);
        }

        if (qtyInputU != null){
          console.log(qtyInputU.value);
        }
        
        if (qtyInputN != null){
          console.log(qtyInputN.value);
        }  
    });

    // en el objeto FormData guardamos
    // allí todos los datos a enviar
    /*formData.append('igv', igv);
    formData.append('subtotal', subtotal);
    formData.append('total', total);
    formData.append('products', products);*/

    e.preventDefault();
}


