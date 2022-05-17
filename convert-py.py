def cyrilic(result):
    symbols = (u"авгеёкмнопрстухАВЕЁКМНОРСТУХvuѕіЅ’јкІЈХ",
               u"aBreekMHonpcTyxABEEKMHOPCTyXvusiS'jkIJX")

    tr = {ord(a): ord(b) for a, b in zip(*symbols)}
    return result.translate(tr)
