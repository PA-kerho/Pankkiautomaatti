#ifndef SLPINKOODI_GLOBAL_H
#define SLPINKOODI_GLOBAL_H

#include <QtCore/qglobal.h>

#if defined(SLPINKOODI_LIBRARY)
#  define SLPINKOODISHARED_EXPORT Q_DECL_EXPORT
#else
#  define SLPINKOODISHARED_EXPORT Q_DECL_IMPORT
#endif

#endif // SLPINKOODI_GLOBAL_H
