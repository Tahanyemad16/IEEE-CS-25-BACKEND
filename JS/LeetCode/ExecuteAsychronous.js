/**
 * @param {Array<Function>} functions
 * @return {Promise<any>}
 */
var promiseAll = function(functions) {
     return new Promise((resolve, reject) => {
        const results = [];
        let resolvedCount = 0;

        if (functions.length === 0) {
            resolve([]);
            return;
        }

        functions.forEach((fn, index) => {
            fn()
                .then(result => {
                    results[index] = result;
                    resolvedCount++;
                    if (resolvedCount === functions.length) {
                        resolve(results);
                    }
                })
                .catch(err => reject(err));
        });
    });
};

/**
 * const promise = promiseAll([() => new Promise(res => res(42))])
 * promise.then(console.log); // [42]
 */