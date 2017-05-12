var array = [{ 'alpha' : 'puffin', 'beta' : 'beagle' },{ 'alpha' : 'puffin', 'betas' : 'beagle' }];
var keys = [];
for (var i in array){
 for (var key in array[i]) {
 	if(keys.indexOf(key)==-1){
     keys.push(key);
     }
 	}
 }
