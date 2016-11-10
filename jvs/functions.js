
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
   var sust = cells[1].innerText;
   var pres = cells[2].innerText;
   var dosis = cells[3].innerText;
   
   var newRow = document.createElement('tr');
   
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
  inputQty.className ='form-control'
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