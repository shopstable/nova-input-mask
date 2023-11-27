<template>
    <span>{{ field.value }}</span>
</template>

<script>
import maskValue from '../maskValue'

export default {
    props: ['resourceName', 'field'],
    mounted() {
        if (this.field.mask && this.field.storeRawValue) {
            this.field.value = maskValue(this.field.mask, this.field.value)
        }
    }
}
</script>
