<template>
  <form
    :action="action"
    :method="formMethod"
    :enctype="enctype"
  >

    <input
      :value="$_.csrf()"
      type="hidden"
      name="_token"
    >

    <input
      v-if="showHiddenMethodInput"
      :value="hiddenMethod"
      type="hidden"
      name="_method"
    >

    <slot/>

    <hr>

    <div class="form-group row">
      <div class="col-12 text-center">
        <button
          type="submit"
          class="btn btn-primary">新增</button>
      </div>
    </div>
  </form>

</template>

<script>
import propsValidator from '../utils/propsValidator.js'

export default {
  name: 'BaseForm',
  props: {
    method: {
      type: String,
      default: '',
      validator(value) {
        const values = ['', 'get', 'post', 'patch', 'put', 'delete']
        return propsValidator.indexOf(values, value)
      }
    }
  },
  data() {
    return {
      action: '',
      hiddenMethod: '',
      enctype: null
    }
  },
  computed: {
    showHiddenMethodInput() {
      if (!this.hiddenMethod) {
        return false
      }
      return ['get', 'post'].indexOf(this.hiddenMethod) === -1
    },
    formMethod() {
      return this.hiddenMethod === 'get' ? 'get' : 'post'
    }
  },
  mounted() {
    this.action = this.$attrs.action ? this.$attrs.action : this.$_.action()
    this.hiddenMethod = this.method ? this.method : this.$_.method()
    this.setEnctype()
  },
  methods: {
    setEnctype() {
      const elm = this.$vnode.elm
      for (let i = 0; i < elm.length; i++) {
        if (elm[i].type === 'file') {
          this.enctype = 'multipart/form-data'
          break
        }
      }
    }
  }
}
</script>
