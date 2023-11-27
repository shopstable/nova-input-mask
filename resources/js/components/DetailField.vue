<template>
  <PanelItem :index="index" :field="field" />
</template>

<script>
export default {
  props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],
  mounted() {
      if (this.field.mask && this.field.storeRawValue) {
        this.field.value = maskValue(this.field.mask, this.field.value)
      }
  }
}
</script>
