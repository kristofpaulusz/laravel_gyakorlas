import Ajax from "../model/Ajax.js";
import Szakdoga from "../view/Szakdoga.js";

class Controller {
    #model;
    #view;
    constructor() {
        console.log("Controller");
        this.#model = new Ajax();
        this.#model.get('/szakdogak', this.load.bind(this))
        
    }
    load(results) {
       results.forEach(elem => {
            new Szakdoga(elem, $("#infoHelye"));
       });
    }
}
export default Controller;

