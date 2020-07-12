$(document).ready(function() {
 
  handleStatusChanged();
  
});

function handleStatusChanged() {
    $('#toggleElement').on('change', function () {
      toggleStatus();   
    });
}

function toggleStatus() {
    if ($('#toggleElement').is(':checked')) {
        $('#elementsToOperateOn :input').attr('disabled', true);
    } else {
        $('#elementsToOperateOn :input').removeAttr('disabled');
    }   
}