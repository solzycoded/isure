class ClauseCondition{
    newOption(_this){
        // parent-id="' + parent + '
        let parent        = $(_this).parent();

        let condition     = parent.children('.new-clause-condition');
        let clause        = condition.val();
        let header        = parent.attr('clause-header-id');

        let conditionsContainerSelector = '.insurance-clause[clause-header-id=' + header + '] .clause-options-container ol';

        if(!isEmpty(clause) && match((conditionsContainerSelector + ' .clause-option'), clause).length==0) {
            const clauseModel = new ClauseModel(clause);
            clause            = clauseModel.getClause();

            let option = '<li class="list-group-item p-1 clause clause-option position-relative" clause-id="' + clause.id + '"">' + clause.title + '<div class="position-absolute end-0 top-0 bottom-0 pt-1 pe-1" onClick="deleteCondition(this)"><i class="bi bi-trash text-danger"></i></div></li>';

            $(conditionsContainerSelector).removeClass('d-none').append(option);
            // this.addToHeaderList(clause, header);
        }

        // clear the input tag
        condition.val('');
    }

    addToHeaderList(clause, header){
        let headerTag = (new CreateInsuranceClause()).findClause(header);
        let title     = clause.title + ' (PARENT: ' + $.trim(headerTag.text()) + ')';

        let newHeader = '<option value="' + clause.id + '">' + title + '</option>';

        $('.clause-header-list').append(newHeader);
    }

    addOnClickAdd(_this){
        this.newOption(_this);
    }
}