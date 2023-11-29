class DeleteClause{
    remove(_this){
        let headerId   = $(_this).attr('clause-header-id');
        this.removeClause(headerId);
    }

    getClauseIds(conditions){
        let clauseList = [];

        for (let index = 0; index < conditions.length; index++) {
            let clauseId = conditions.eq(index).attr('clause-id');

            clauseList[index] = clauseId;
        }

        return clauseList;
    }

    removeClauses(clauseIds){
        for (let index = 0; index < clauseIds.length; index++) {
            let clauseId = clauseIds[index];
            let header   = $('.clause-header[clause-id=' + clauseId + ']');

            if(header.length > 0){
                this.removeClause(clauseId);
            }

            // remove the options from from header options
            this.removeHeaderOption(clauseId);
        }
    }

    removeClause(headerId){
        let conditions = $('.clause-options[parent-id=' + headerId + '] li');

        let clauseIds  = this.getClauseIds(conditions);

        this.removeClauses(clauseIds);

        $('.insurance-clause[clause-header-id=' + headerId + ']').parent().remove();

        // remove the options from from header options
        this.removeHeaderOption(headerId);
    }

    removeHeaderOption(id){
        $('.clause-header-list option[value="' + id + '"]').remove();
    }
}