 const { createApp} = Vue;

 createApp({
    data(){
        return{
          todos: []
        }
    },
    mounted(){
        axios.get('http://localhost/php-todo-list-json/todo.php')
        .then(res => {
            this.todos = res.data
        })
    }
 }).mount('#app')