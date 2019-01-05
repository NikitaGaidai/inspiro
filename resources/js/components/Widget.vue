<template>
    <section :id="id">
        <slot></slot>
    </section>
</template>

<script>
    export default {
        props: ['id', 'name'],
        mounted() {
            this.$eventBus.$emit(this.EVENT_WIDGET_CREATED, {id: this.id, name: this.name})
        }
    }
</script>
