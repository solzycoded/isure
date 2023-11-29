class InsuranceClause{
    add(){
        (new CreateInsuranceClause()).createClause();

        $('.clause-header-list, #new_clause').val('');
    }
    
    addOnEnter(){
        $('#new_clause').keyup(function (e) {
            if(e.which == 13) {
                (new InsuranceClause()).add();
            }
        });
    }
    
    addOnClickAdd(){
        $('.add-new-clause').click(function () {
            (new InsuranceClause()).add();
        });
    }
}