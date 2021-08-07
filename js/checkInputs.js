const checkFunc = str => {
  str = str.trim();
  str = str.replace(/ {2,}/g, ' ');
  str = str.replace(/-{2,}/g, '-');
  return str;
};

const checkHyphenSpace = str => {
  str = str.trim();
  str = str.replace(/^-*/, '');
  str = str.replace(/-*$/, '');
  return str;
};

const checkName = str => {
  const tmpStr = str.split(' ');
  tmpStr.forEach((item, i) => {
    if (/.*-.*/.test(item)) {
      const tmpItem = item.split('-'),
        tmpArr = [];
      tmpItem.forEach(item => {
        tmpArr.push(item.slice(0, 1).toUpperCase() + item.slice(1).toLowerCase());
      });
      tmpStr[i] = tmpArr.join('-');
    } else {
      tmpStr[i] = item.slice(0, 1).toUpperCase() + item.slice(1).toLowerCase();
    }
  });
  return tmpStr.join(' ');
};

const userName = document.querySelector('.name'),
  userEmail = document.querySelector('.email'),
  formComment = document.querySelector('.comment'),
  btn = document.querySelector('.btn');

userName.addEventListener('input', () => {
  if (userName.value.length < 2) {
    userName.setCustomValidity('Имя должно быть больше одной буквы');
  } else {
    userName.setCustomValidity('');
  }
  userName.onblur = () => {
    userName.value = checkFunc(checkHyphenSpace(userName.value));
    userName.value = checkName(userName.value);
  };
});


userEmail.addEventListener('input', () => {
  userEmail.value = userEmail.value.replace(/[^a-z@\-_.!~*'0-9]/gi, '');
  if (!/^\w+@\w+.\w{2,}$/.test(userEmail.value)) {
    userEmail.setCustomValidity('Введите почту в формате example@example.com');
  } else {
    userEmail.setCustomValidity('');
  }
  userEmail.onblur = () => {
    userEmail.value = checkFunc(checkHyphenSpace(userEmail.value));
  };
});

formComment.addEventListener('input', () => {
  formComment.onblur = () => {
    formComment.value = checkFunc(checkHyphenSpace(formComment.value));
  };
});
