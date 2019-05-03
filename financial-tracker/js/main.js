// Enter JavaScript for the exercise here...
var containerTransactionTracker = document.querySelector('.frm-transactions');
var transactionTableBody = document.querySelector('tbody');
var transactionsTable = document.querySelector('.transactions');
var pageRefresh;
var tableCount = 0;
var debitValue = 0;
var creditValue = 0;
var totalDebits = document.querySelector('span.total.debits');
var totalCredits = document.querySelector('span.total.credits');
var errorCode = document.querySelector('.error');

containerTransactionTracker.addEventListener('submit', function (evt) {
  var
    description,
    type,
    amount,
    tools,
    trash,
    tools,
    formInput,
    currencyInput,
    descriptionInput,
    cardTypeInput,
    typeInput,
    totalAmountInput,

    formInput = evt.target.elements['description'].value;
    cardTypeInput = evt.target.elements['type'].value;
    priceInput = evt.target.elements['currency'].value;

  if (formInput == "" || cardTypeInput == "" || priceInput == "") {

    errorCode.textContent = 'ERROR: An input field is empty. Please fill out all input fields';
    evt.preventDefault();

  } else {
    errorCode.textContent = '';
    row = document.createElement('tr');
    description = document.createElement('td');
    type = document.createElement('td');
    amount = document.createElement('td');
    tools = document.createElement('td');
    trash = document.createElement('i');

    descriptionInput = document.createTextNode(formInput);
    typeInput = document.createTextNode(cardTypeInput);
    totalAmountInput = document.createTextNode(priceInput);

    row.setAttribute('class', cardTypeInput);
    amount.setAttribute('class', 'amount');
    tools.setAttribute('class', 'tools');
    trash.setAttribute('class', 'delete fa fa-trash-o');

    description.appendChild(descriptionInput);
    type.appendChild(typeInput);
    amount.appendChild(totalAmountInput);
    tools.appendChild(trash);
    row.appendChild(description);
    row.appendChild(type);
    row.appendChild(amount);
    row.appendChild(tools);
    transactionTableBody.appendChild(row);

    if (cardTypeInput == 'debit') {
      debitValue = parseFloat(debitValue) + parseFloat(priceInput);
      totalDebits.textContent = '$' + debitValue.toFixed(2);
    } else {
      creditValue = parseFloat(creditValue) + parseFloat(priceInput);
      totalCredits.textContent = '$' + creditValue.toFixed(2);
    }

    console.log('Transaction Tracker Actually working');
    evt.target.reset();
    evt.preventDefault();

  }
});

transactionsTable.addEventListener('click', function (evt) {
  var targetRow = evt.target.parentNode.parentNode;
  var targetAmount = evt.target.parentNode.previousSibling.textContent;
  var targetType = evt.target.parentNode.previousSibling.previousSibling.textContent;

  if (evt.target.classList.contains('delete')) {
    var confirmDeleteAlert = confirm("Delete Selection?");

    if (confirmDeleteAlert == true) {
      transactionTableBody.removeChild(targetRow);

      if (targetType == 'debit') {
        debitValue = parseFloat(debitValue) - parseFloat(targetAmount);
        totalDebits.textContent = '$' + debitValue.toFixed(2);
      } else {
        creditValue = parseFloat(creditValue) - parseFloat(targetAmount);
        totalCredits.textContent = '$' + creditValue.toFixed(2);
      }

    }

  }
});

function timeoutPageRefresh() {
  clearInterval(pageRefresh);

  pageRefresh = setInterval(function () {
    alert('NOTICE: Page will refresh after timeout');

    if (alert) {
      location.reload();
    }

  }, 120000);

};

timeoutPageRefresh();
window.addEventListener('mousemove', timeoutPageRefresh);
