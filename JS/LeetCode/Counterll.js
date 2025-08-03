/**
 * @param {integer} init
 * @return { increment: Function, decrement: Function, reset: Function }
 */
var createCounter = function(init) {
    let res=init;
    return{
        increment: function(){
           return ++res;
        },
        decrement: function(){
            return --res;
        },
        reset: function(){
            res=init;
            return res;
        }
    };
};

/**
 * const counter = createCounter(5)
 * counter.increment(); // 6
 * counter.reset(); // 5
 * counter.decrement(); // 4
 */