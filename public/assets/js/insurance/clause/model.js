class ClauseModel{
    constructor(clause = null, header = null){
        this.setHeader(header);
        this.setClause(clause);
    }

    setHeader(header){
        this.header = isEmpty(header) ? $('.clause-header-list').val() : header;
    }

    getHeader(){
        return this.header;
    }

    setClause(clause){
        this.clause = isEmpty(clause) ? $.trim($('#new_clause').val()) : clause;
        this.clause = this.updateClause(this.clause);
    }

    getClause(){
        return this.clause;
    }

    // assign an id to the new clause
    updateClause(clause){
        let id = $('.clause').length + 1;

        return {id: id, title: clause};
    }
}