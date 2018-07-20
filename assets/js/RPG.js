/**
 * Created by walderwerber on 20.07.18.
 */
var RPG = function() {

  const APP_CONTAINER_ID = "#rpg";

  this.app;

  this.init = function() {
    app = new Vue({
      el: APP_CONTAINER_ID
    });
  };

  init();

} ();