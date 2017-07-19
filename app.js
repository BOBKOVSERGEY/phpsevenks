var bs = require("browser-sync").create();

//тут
bs.watch(['*.*']).on("change", bs.reload);

// Start a Browsersync proxy
bs.init({
  proxy: "phpsevenks"
});