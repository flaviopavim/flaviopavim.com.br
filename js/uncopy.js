(function (d) {
    if (d.addEventListener && d.querySelectorAll) {
        //Edite esta variável conforme a necessidade (elementos que deseja impedir que sejam copiados)
        var query = "nav, form";

        //Nota: no IE a tag script é copiada, então prefira deixar sempre ele
        query += ", script";

        var running = false;

        function finishEventCopy() {
            running = false;
        }

        //Oculta os elementos pra não serem copiados
        function preventEventCopy(e) {
            if (running) return;

            running = true;

            //Clona o body
            var cloned = document.body.cloneNode(true);

            //Cria elemento temporário que será selecionado pelo range
            var tmpNode = document.createElement("div");
            var els = cloned.querySelectorAll(query);

            for (i = 0, j = els.length; i < j; i++) {
                els[i].parentNode.removeChild(els[i]);
            }

            //Cria um elemento vazio pra ajustar o range de maneira mais fácil
            var empty = document.createElement("div");
            empty.innerHTML = " ";

            tmpNode.appendChild(cloned);
            tmpNode.appendChild(empty);

            document.body.appendChild(tmpNode);

            //define o range no DIV temporário
            var range = document.createRange();
            range.setStart(tmpNode.firstChild, 0);
            range.setEnd(empty, 1);

            //Seleciona o div temporário
            var sel = window.getSelection();
            sel.removeAllRanges();
            sel.addRange(range);

            //Executa o comando de cópia
            document.execCommand("copy");

            document.body.removeChild(tmpNode);

            empty = range = sel = tmpNode = null;

            setTimeout(finishEventCopy, 10);
        }

        function triggerByKeyboard(e) {
            if (e.ctrlKey && e.keyCode == 67) preventEventCopy(e);
        }

        d.addEventListener("beforecopy", preventEventCopy, false);
        d.addEventListener("copy", preventEventCopy, false);
        d.addEventListener("keydown", triggerByKeyboard, false);
    }
})(document);