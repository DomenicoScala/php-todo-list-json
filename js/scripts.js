 const { createApp } = Vue;

 createApp({
    data(){
        return {
            todos: [],
            nuovoTodo: ''
        }
    },
    mounted(){
        axios.get('http://localhost/php-todo-list-json/todo.php')
        .then(res => {
            this.todos = res.data
        })
    },
    methods: {
        addTodo() {
           /*  this.todos.push({
                todo: this.nuovoTodo,
                status: false
            });

            this.newTodo = ''; */
            
            axios
            .post(
                'http://localhost/php-todo-list-json/create-todo.php',
                {
                    todo: this.nuovoTodo
                },
                {
                    headers: { 'Content-Type': 'multipart/form-data'}
                }
            )
            .then(res => {
                console.log(res)
                this.todos.push({
                    todo: this.nuovoTodo,
                    status: false
                })

                this.nuovoTodo = ''
            }) 


        }
    }
 }).mount('#app')





