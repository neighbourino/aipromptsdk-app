import './bootstrap';

import Alpine from 'alpinejs'
import Clipboard from "@ryangjchandler/alpine-clipboard";

Alpine.plugin(Clipboard)

window.Alpine = Alpine
window.Alpine.start()