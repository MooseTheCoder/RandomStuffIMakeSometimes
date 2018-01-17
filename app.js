var app = new Vue({
  el: '#app',
  data: {
    todos: [
    ]
  },
  methods:{
    checkTodoList : function(){
      if(this.todos.length < 1){
        //return 'Nothing to do';
        return false;
      }else{
        return true;
      }
    },

    addData : function(){
      if($('#task').val() != ""){
        app.todos.push({text : $('#task').val(),status : 'Incomplete'});
        $('#task').val('').focus();
      }else{
        alert('No Data!');
      }
    },

    updateStatus : function(e){
      this.todos[e].status = 'Complete';
    },

    removeTask : function(e){
        this.todos.splice(e,1)
    },

  }
});
