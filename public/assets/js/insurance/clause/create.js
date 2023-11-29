class CreateInsuranceClause{
    constructor(){
        this.clause = new ClauseModel();
    }

    // create new clause
    createClause(){
        let header       = this.clause.getHeader();
        let headerIsEmpty = isEmpty(header);

        let clause        = this.clause.getClause();
        let clauseIsEmpty = isEmpty(clause.title);

        if(!clauseIsEmpty && !this.clauseIsDuplicate(clause.title, header)){
            if(headerIsEmpty){
                this.newClause(clause, header); // create new clause
                // add clause to "list of headers"
                this.addToHeaderList(headerIsEmpty);
            }
            else{
                this.newOption(); // create new option
            }
        }
    }

    addToHeaderList(headerIsEmpty){
        let clause = this.clause.getClause();
        let title  = clause.title;

        // if header was selected, to create a new clause, find the header's title and append it to as a parent of the new header
        if(!headerIsEmpty){
            let header    = this.clause.getHeader();
            let headerTag = this.findClause(header);
            title         = title + ' (PARENT: ' + $.trim(headerTag.children('span').text()) + ')';
        }

        let newHeader = '<option value="' + clause.id + '">' + title + '</option>';

        $('.clause-header-list').append(newHeader);
    }

    findClause(id){
        return $('.clause[clause-id=' + id + ']');
    }

    clauseIsDuplicate(clause, header){
        let headerTag         = match('.clause.clause-header span', clause);
        let clauseIsDuplicate = headerTag.length > 0;

        if(clauseIsDuplicate && !isEmpty(header)){
            clauseIsDuplicate = $('.clause.clause-header[parent-id=' + header + ']').length > 0;
        }

        return clauseIsDuplicate;
    }

    newClause(clause, header){
        let clauseDetails   = {clauseTitle: ('<span>' + clause.title + '</span>'), parentId: ''};

        if(!isEmpty(header)){
            clauseDetails.parentId    = header; // parent id tag, for newly added clause

            let headerTag             = this.findClause(header);
            clauseDetails.clauseTitle = clauseDetails.clauseTitle + ' <small class="text-secondary" style="font-size: 10px">| <b class="text-dark">' + $.trim(headerTag.children('span').text()) + '</b></small>';
        }

        // console.log('parent-id="' + (clauseDetails.parentId) + '"');
        let clauseTag = '<div class="col-12 col-sm-6 col-md-4 clause-holder"><div class="shadow-sm p-2 mb-4 bg-body rounded position-relative border-bottom border-dark border-2 pb-2 insurance-clause" style="max-height: 400px; overflow-y: auto" clause-header-id="' + clause.id + '" parent-id="' + clauseDetails.parentId + '">' +
            '<div class="clause-header-container position-relative">' +
                '<h6 class="border-bottom pb-2 clause-header clause pe-4" style="font-size: 16px" clause-id="' + clause.id + '" parent-id="' + clauseDetails.parentId + '">' + clauseDetails.clauseTitle + '</h6>' +
                '<div class="position-absolute top-0 end-0">' +
                    '<button class="btn btn-transparent p-0" onClick="deleteClause(this)" clause-header-id="' + clause.id + '">' +
                        '<i class="bi bi-trash text-danger"></i>' +
                    '</button>' +
                '</div>' +
            '</div>' +

            '<div class="clause-options-container">' +
                '<p class="lead text-secondary fw-bold pb-0 mb-2" style="font-size: 15px">Condition(s) for <b class="text-dark">' + clause.title + '</b> clause</p>' +
                '<div class="input-group mb-2 mt-1" clause-header-id="' + clause.id + '">' +
                    '<input type="text" class="form-control m-0 new-clause-condition" placeholder="Enter clause condition">' +
                    '<button type="button" class="add-new-clause-condition btn btn-secondary" onClick="addClauseConditionOnClickAdd(this)">Add <i class="bi bi-plus-circle"></i></button>' +
                '</div>' +
                '<ol class="list-group list-group-numbered bg-secondary d-none clause-options" parent-id="' + clause.id + '">' +
                '</ol>' +
            '</div>' +

        '</div></div>';

        $('.insurance-clause-list').prepend(clauseTag);
    }

    newOption(){
        // parent-id="' + parent + '
        let clause = this.clause.getClause();
        let option = '<li class="list-group-item p-1 position-relative" clause-id="' + clause.id + '"">' + clause.title + '<div class="position-absolute end-0 top-0 bottom-0 pt-1 pe-1" onClick="deleteCondition(this)"><i class="bi bi-trash text-danger"></i></div></li>';

        let header = this.clause.getHeader();
        let headerContainer = this.findHeaderSectionTag(header);

        // if(headerContainer.length == 0){ // create header section
        //     let clauseTag = this.findClause(header);

        //     clause        = {id: header, title: $.trim(clauseTag.text())};
        //     header        = clauseTag.parent().attr('parent-id');
        // }

        // this.newClause(clause, header);

        headerContainer.children('.clause-options-container').children('ol').removeClass('d-none').append(option);
    }

    findHeaderSectionTag(header){
        return $('.insurance-clause[clause-header-id=' + header +']');
    }
}