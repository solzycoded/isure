class CreateInsurance{
    request(){
        $('.create-insurance-type').click(function(){
            let get = (new CreateInsurance()).get();

            if(get.name!=undefined){
                let data = {type: $('input[name=type]').val(), name: get.name, description: get.description, premium: get.premium, clause_list: (new CreateInsurance()).getClauseList()};

                console.log(data.clause_list);
                const ajax = new Ajax('POST', '/api/i1/insurance-policy-covers', data);
                ajax.request((new CreateInsurance()).success, function(response){console.log(response);}, {type: data.type});
            }
        });
    }

    success(response, data){
        if(response.success){
            window.location = '/insurance-policies/covers/' + data.type;
        }
    }

    get(){
        // get name
        let name = this.val('#name');
        // get description
        let description = this.val('#description');
        // get premium
        let premium = this.val('#premium');

        let data = {name: name, description: description, premium: premium};

        return this.validate(data) ? data : {};
    }

    validate(attributes){
        return !isEmpty(attributes.name) && !isEmpty(attributes.name);
    }

    val(selector){
        return $.trim($(selector).val());
    }

    getClauseList(){
        // get headers (without parents)
        let headers    = $('.clause.clause-header[parent-id=""]');
        let clauseList = [];

        for (let index = 0; index < headers.length; index++) {
            let header   = headers.eq(index);
            let headerId = headers.eq(index).attr('clause-id');

            let conditions = this.getClause(headerId);

            let clause     = {'name': $.trim(header.children('span').text()), 'conditions': conditions};

            clauseList[index] = clause;
        }

        return clauseList;
    }

    getClause(headerId){
        let conditions = $('.clause-options[parent-id=' + headerId + '] li');

        return this.getConditionTexts(conditions);
    }

    getConditionTexts(conditions){
        let conditionList = [];

        for (let index = 0; index < conditions.length; index++) {
            let condition = $.trim(conditions.eq(index).text());

            conditionList[index] = condition;
        }

        return conditionList;
    }
}