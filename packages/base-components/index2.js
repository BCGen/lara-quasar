import utils from './utils/utils'
import helper, { A } from './utils/helper'

import * as components from './components'

export default {
  install(Vue) {
    try {
      window.bindComponents = utils.bindComponents
      window.clockpicker = require('./assets/plugins/clockpicker/dist/bootstrap-clockpicker.min.js')
      Vue.prototype.$_helper = helper
      Vue.prototype.$_ = new A()
    } catch (e) {
      console.log(e)
    }

    utils.bindComponents(components)
  }
}
