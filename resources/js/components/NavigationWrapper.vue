<template>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="#app">Главная <span class="sr-only">(текущая)</span></a>

            <a class="nav-item nav-link" v-for="widget in widgets" :href="'#' + widget.id">{{ widget.name }}</a>

            <a class="nav-item nav-link" href="#contact">Контакты</a>
        </div>
        <!--end navbar-nav-->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                widgets: [],
            }
        },
        created() {
            this.$eventBus.$on(this.EVENT_WIDGET_CREATED, this.addWidget)
        },
        methods: {
            addWidget(data) {
                this.widgets.push(data);
            }
        }
    }
</script>
