<template>
    <div>
        <ul>
            <li v-for="task in tasks" v-text="task"></li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                task: []
            };
        },

        created() {
            axios.get('/tasks').then(response => (this.task = response.data()))
        }
    }
</script>
