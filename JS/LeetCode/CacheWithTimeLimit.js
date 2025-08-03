var TimeLimitedCache = function() {
     this.cache = new Map();
};

/** 
 * @param {number} key
 * @param {number} value
 * @param {number} duration time until expiration in ms
 * @return {boolean} if un-expired key already existed
 */
TimeLimitedCache.prototype.set = function(key, value, duration) {
     const now = Date.now();
    const expiresAt = now + duration;
    const existed = this.cache.has(key) && this.cache.get(key).expiresAt > now;

    if (this.cache.has(key)) {
        clearTimeout(this.cache.get(key).timeoutId);
    }

    const timeoutId = setTimeout(() => {
        this.cache.delete(key);
    }, duration);

    this.cache.set(key, { value, expiresAt, timeoutId });

    return existed;
};

/** 
 * @param {number} key
 * @return {number} value associated with key
 */
TimeLimitedCache.prototype.get = function(key) {
      const entry = this.cache.get(key);
    if (!entry || entry.expiresAt <= Date.now()) {
        return -1;
    }
    return entry.value;
};

/** 
 * @return {number} count of non-expired keys
 */
TimeLimitedCache.prototype.count = function() {
     const now = Date.now();
    let count = 0;
    for (const [key, entry] of this.cache.entries()) {
        if (entry.expiresAt > now) {
            count++;
        } else {
            this.cache.delete(key);
        }
    }
    return count;
};

/**
 * const timeLimitedCache = new TimeLimitedCache()
 * timeLimitedCache.set(1, 42, 1000); // false
 * timeLimitedCache.get(1) // 42
 * timeLimitedCache.count() // 1
 */