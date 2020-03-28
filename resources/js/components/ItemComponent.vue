<template>
    <div class="card mb-4">
        <img src="http://www.staples-3p.com/s7/is/image/Staples/m005185536_sc7?$std$" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ item.name }}</h5>
            <p class="card-text">{{ item.description }}</p>

        </div>
        <div class="card-footer text-right">
            <a href="#" class="btn btn-primary"><i class="fa fa-pencil-square-o fa-lg" title="Edit Item"></i></a>
            <a href="#" class="btn btn-danger"><i class="fa fa-trash-o fa-lg" title="Delete Item"></i></a>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['item'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
