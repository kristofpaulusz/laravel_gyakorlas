class Ajax {
    constructor() {}

    get(vegpont, callback) {
        fetch(vegpont, {
                method: "GET",
                headers: {
                  "Content-Type": "application/json",
                },
              })
              .then(response => response.json())
              .then(data => callback(data))
              .catch(error => {
                console.error("hiba:", error);
              });
    }
    post(vegpont, callback) {
        fetch(vegpont, {
            method: "POST",
            body: JSON.stringify(data),
            headers: {
              "Content-Type": "application/json",
            },
          })
          .then(response => {callback(response)})
          .catch(error => {
            console.error("hiba:", error);
          });
    }
    put(vegpont, callback) {
        fetch(vegpont, {
            method: "PUT",
            body: JSON.stringify(data),
            headers: {
              "Content-Type": "application/json",
            },
          })
          .then(response => {callback(response)})
          .catch(error => {
            console.error("hiba:", error);
          });
    }
    delete(vegpont, callback) {
        fetch(vegpont, {
            method: "DELETE",
            body: JSON.stringify(data),
            headers: {
              "Content-Type": "application/json",
            },
          })
          .then(response => {callback(response)})
          .catch(error => {
            console.error("hiba:", error);
          });
    }
}
export default Ajax;