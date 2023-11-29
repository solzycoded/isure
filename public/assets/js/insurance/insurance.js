$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(function(){
    const insuranceClause = new InsuranceClause();

    insuranceClause.addOnEnter();
    insuranceClause.addOnClickAdd();

    const createInsurance = new CreateInsurance();
    createInsurance.request();
});

const isEmpty = function(val){
    return val=='' || val===null;
}

const addClauseConditionOnClickAdd = function(_this){
    (new ClauseCondition()).addOnClickAdd(_this);
}

const addClauseConditionOnEnter = function(_this){
    (new ClauseCondition()).addOnEnter(_this);
}

const match = function(selector, clause){
    return $(selector).filter(function() {
        return $(this).text() === clause;
    });
}

const deleteClause = function(_this){
    if(confirmDelete()){
        (new DeleteClause()).remove(_this);
    }
}

const confirmDelete = function(){
    return confirm('This clause and it\'s conditions will now be removed!');
}

const deleteCondition = function(_this){
    $(_this).parent().remove();
}